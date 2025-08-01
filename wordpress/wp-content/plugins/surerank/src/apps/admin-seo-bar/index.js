import { createRoot } from 'react-dom/client';
import { __ } from '@wordpress/i18n';
import { useState, Suspense, memo } from '@wordpress/element';
import {
	Badge,
	Skeleton,
	Drawer,
	Container,
	Button,
	Text,
} from '@bsf/force-ui';
import { BarChart, X } from 'lucide-react';
import { AnimatePresence, motion } from 'framer-motion';
import { SureRankFullLogo } from '@GlobalComponents/icons';
import PageChecks from '@SeoPopup/components/page-seo-checks/page-checks';
import { useDispatch, useSuspenseSelect } from '@wordpress/data';
import PageChecksListSkeleton from '@/apps/seo-popup/components/page-seo-checks/page-checks-list-skeleton';
import { STORE_NAME } from '@Store/constants';
import '@Store/store';
import './style.scss';

const SeoChecksDrawer = ( {
	open,
	setOpen,
	seoChecks,
	errorMessage,
	pageTitle,
	postId,
	postType,
} ) => {
	const { ignoreSeoBarCheck, restoreSeoBarCheck } = useDispatch( STORE_NAME );

	const handleCloseClick = ( e ) => {
		e.preventDefault();
		e.stopPropagation();
		setOpen( false );
	};

	const handleIgnoreClick = ( checkId ) => {
		ignoreSeoBarCheck( checkId, postId, postType );
	};

	const handleRestoreClick = ( checkId ) => {
		restoreSeoBarCheck( checkId, postId, postType );
	};

	return (
		<Drawer
			exitOnEsc
			position="right"
			scrollLock
			setOpen={ setOpen }
			open={ open }
			className="z-999999"
		>
			<Drawer.Panel>
				<Drawer.Header className="px-5 pt-5 pb-0">
					<Container align="center" justify="between">
						<SureRankFullLogo className="w-32 h-5" />
						<Button
							variant="ghost"
							size="sm"
							icon={ <X /> }
							onClick={ handleCloseClick }
							className="text-text-secondary hover:text-text-primary"
							aria-label={ __( 'Close drawer', 'surerank' ) }
						/>
					</Container>
					<Container align="center" justify="between">
						<Text
							as="span"
							color="primary"
							className="py-2"
							size={ 14 }
							weight={ 500 }
						>
							{ pageTitle +
								' - ' +
								__( 'Page SEO Checks', 'surerank' ) }
						</Text>
					</Container>
				</Drawer.Header>
				<Drawer.Body className="overflow-x-hidden space-y-3 px-3">
					<AnimatePresence>
						{ ! seoChecks || errorMessage ? (
							<motion.div
								className="space-y-2 p-2"
								initial={ { opacity: 0 } }
								animate={ { opacity: 1 } }
								exit={ { opacity: 0 } }
								transition={ { duration: 0.3 } }
							>
								<p className="m-0 text-text-secondary">
									{ errorMessage ||
										__(
											'No SEO data available.',
											'surerank'
										) }
								</p>
							</motion.div>
						) : (
							<Suspense fallback={ <PageChecksListSkeleton /> }>
								<PageChecks
									pageSeoChecks={ seoChecks }
									onIgnore={ handleIgnoreClick }
									onRestore={ handleRestoreClick }
								/>
							</Suspense>
						) }
					</AnimatePresence>
				</Drawer.Body>
			</Drawer.Panel>
			<Drawer.Backdrop />
		</Drawer>
	);
};

const CustomBadge = ( { id, spanElement, forceRefresh = null } ) => {
	const [ drawerOpen, setDrawerOpen ] = useState( false );

	const isTaxonomy = window?.surerank_seo_bar?.type === 'taxonomy';
	const { checks: seoChecks, error: errorMessage } = useSuspenseSelect(
		( select ) =>
			select( STORE_NAME )?.getSeoBarChecks(
				id,
				isTaxonomy ? 'taxonomy' : 'post',
				forceRefresh
			),
		[]
	);

	const title =
		spanElement?.getAttribute( 'data-title' ) ||
		__( 'Untitled', 'surerank' );

	const handleBadgeClick = () => {
		setDrawerOpen( true );
	};

	let badgeProps = {
		icon: <BarChart />,
		variant: 'green',
		label: __( 'Optimized', 'surerank' ),
		className: 'w-fit',
	};

	if ( ! seoChecks || errorMessage ) {
		badgeProps = {
			...badgeProps,
			variant: 'red',
			label: errorMessage || __( 'No Data', 'surerank' ),
		};
	} else if ( seoChecks.badChecks.length > 0 ) {
		badgeProps = {
			...badgeProps,
			variant: 'red',
			label: __( 'Issues Detected', 'surerank' ),
		};
	} else if ( seoChecks.fairChecks.length > 0 ) {
		badgeProps = {
			...badgeProps,
			variant: 'yellow',
			label: __( 'Needs Improvement', 'surerank' ),
		};
	}

	return (
		<>
			<div
				onClick={ handleBadgeClick }
				role="button"
				tabIndex={ 0 }
				className="inline-block cursor-pointer w-full"
				onKeyDown={ ( e ) => {
					if ( e.key === 'Enter' || e.key === ' ' ) {
						handleBadgeClick( e );
					}
				} }
			>
				<Badge { ...badgeProps } />
			</div>
			<Suspense
				fallback={
					<Skeleton
						variant="rectangular"
						className="w-full rounded-full h-6 max-w-32"
					/>
				}
			>
				<SeoChecksDrawer
					open={ drawerOpen }
					setOpen={ setDrawerOpen }
					seoChecks={ seoChecks }
					errorMessage={ errorMessage }
					pageTitle={ title }
					postId={ id }
					postType={ isTaxonomy ? 'taxonomy' : 'post' }
				/>
			</Suspense>
		</>
	);
};

const CustomBadgeMemoized = memo( CustomBadge );

// Store root instances to properly cleanup
const rootInstances = new Map();

const renderBadge = ( span, forceRefresh = false ) => {
	const id = span.getAttribute( 'data-id' );
	if ( ! id ) {
		return;
	}

	// Skip if already rendered and not forcing refresh
	if ( ! forceRefresh && span.dataset.rendered === 'true' ) {
		return;
	}

	// Cleanup existing root if it exists
	const existingRoot = rootInstances.get( span );
	if ( existingRoot ) {
		try {
			existingRoot.unmount();
		} catch ( e ) {}
		rootInstances.delete( span );
	}

	// Create new root and render
	try {
		const root = createRoot( span );
		rootInstances.set( span, root );
		root.render(
			<CustomBadgeMemoized
				id={ id }
				spanElement={ span }
				forceRefresh={ forceRefresh }
			/>
		);
		span.dataset.rendered = 'true'; // Mark as rendered
	} catch ( e ) {}
};

const renderBadges = () => {
	const spans = document.querySelectorAll(
		'span.surerank-page-score[data-id]'
	);
	spans.forEach( ( span ) => {
		renderBadge( span, null );
	} );
};

// Debounce function to prevent multiple rapid calls
const debounce = ( func, wait ) => {
	let timeout;
	return function executedFunction( ...args ) {
		const later = () => {
			clearTimeout( timeout );
			func( ...args );
		};
		clearTimeout( timeout );
		timeout = setTimeout( later, wait );
	};
};

/* global MutationObserver, inlineEditTax, Node */

// Initialize badges on page load
document.addEventListener( 'DOMContentLoaded', () => {
	if (
		window.location.pathname.includes( 'edit.php' ) ||
		window.location.pathname.includes( 'edit-tags.php' )
	) {
		renderBadges();
	}

	// Set up MutationObserver to watch for new span elements
	const table = document.querySelector( '#the-list' );
	if ( table ) {
		const observer = new MutationObserver( ( mutations ) => {
			mutations.forEach( ( mutation ) => {
				if ( mutation.addedNodes.length ) {
					mutation.addedNodes.forEach( ( node ) => {
						if ( node.nodeType === Node.ELEMENT_NODE ) {
							const spans = node.querySelectorAll(
								'span.surerank-page-score[data-id]'
							);
							spans.forEach( ( span ) => {
								if ( ! span.dataset.rendered ) {
									renderBadge( span, Date.now() ); // Force refresh for new terms
								}
							} );
						}
					} );
				}
			} );
		} );

		observer.observe( table, {
			childList: true,
			subtree: true,
		} );
	}
} );

// Handle inline edit for existing terms
document.addEventListener( 'DOMContentLoaded', () => {
	if (
		typeof inlineEditTax !== 'undefined' &&
		typeof inlineEditTax.save === 'function'
	) {
		const originalTaxSave = inlineEditTax.save;
		inlineEditTax.save = function ( id ) {
			let termId = id;
			if ( id && typeof id === 'object' && id.nodeType ) {
				try {
					const row = id.closest( 'tr[id^="tag-"], tr[id^="edit-"]' );
					const idStr = row ? row.id : null;
					if ( idStr ) {
						const parts = idStr.split( '-' );
						termId = parts[ parts.length - 1 ];
					} else {
						return;
					}
				} catch ( e ) {
					return;
				}
			} else if ( typeof id === 'string' && id.startsWith( 'tag-' ) ) {
				termId = id.replace( 'tag-', '' );
			}

			const result = originalTaxSave.call( this, termId );

			const debouncedRerender = debounce( () => {
				const span = document.querySelector(
					`span.surerank-page-score[data-id="${ termId }"]`
				);
				if ( span ) {
					renderBadge( span, Date.now() );
				}
			}, 3000 );

			debouncedRerender();

			return result;
		};
	}
} );

export default memo( CustomBadge );
