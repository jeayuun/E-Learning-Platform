
( function( $ ) {
	
	const initializeDraggableCards = function( ) {
		const draggableCards = $( '.gl-b-draggable-cards' );
		const cursor = $( '#lbdCursor' );

		if ( draggableCards.length > 0 ) {
			draggableCards.each( ( i, el ) => {
				const headingContainer = $( el ).find( '.heading' );
				const headingChildren = $( headingContainer ).find( '.animate-entry' );
				const cardsCarousel = $( el ).find( '.cards-carousel' );
				const animatedContainer = $( el ).find( '.heading-container' );
				const letters = $( animatedContainer ).find( 'svg' ).children();

				gsap.set( headingChildren, { y: 40, opacity: 0 } );

				gsap.to( $( el ).find( '.gear-clip' ), {
					scale: 1.5,
					ease: 'elastic(2, 2)',
					scrollTrigger: {
						trigger: $( el ),
						start: 'top center',
						end: 'top+=30% center',
						scrub: true,
					},
				} );

				gsap.to( headingChildren, {
					y: 0,
					opacity: 1,
					stagger: 0.5,
					scrollTrigger: {
						trigger: $( el ),
						start: 'top-=15% center',
						end: 'top-=15% center',
						onEnter: ( ) => {
							const count = letters.length;
							let delay = 0;
							for ( let index = count - 1; index >= 0; index-- ) {
								gsap.to( letters[ index ], { y: 0, delay: 0.05 * delay, ease: 'elastic(2,2)' } );
								delay++;
							}
						},
					},
				} );

				Draggable.create( '.gl-b-draggable-cards .cards', {
					bounds: '.gl-b-draggable-cards .board',
					onDrag: ( e ) => {
						cursor.css( 'top', e.clientY + 'px' );
						cursor.css( 'left', e.clientX + 'px' );
					},
				} );

				gsap.to( $( el ).find( '.gear' ), {
					scale: 3,
					ease: 'linear',
					scrollTrigger: {
						trigger: $( el ),
						start: 'top center',
						end: 'top+=30% center',
						scrub: true,
					},
				} );

				if ( cardsCarousel.length > 0 ) {
					new Swiper( cardsCarousel.get( 0 ), {
						loop: false,
						slidesPerView: 'auto',
						freemode: true,
						mousewheel: {
							forceToAxis: true,
						},
					} );
				}

				$( '.gl-b-draggable-cards .cards' ).on( 'mouseenter', function( ) {
					$( '.lbd-cursor span' ).text( 'Move' );
					$( '.lbd-cursor' ).addClass( 'bigger' );
				} );

				$( '.gl-b-draggable-cards .cards' ).on( 'mouseleave', function( ) {
					$( '.lbd-cursor span' ).empty( );
					$( '.lbd-cursor' ).removeClass( 'bigger' );
				} );
			} );
		}
	};
	
	const initializeCards = function( ) {
		const glCards = $( '.gl-b-cards' );

		if ( glCards.length > 0 ) {
			glCards.each( ( i, el ) => {
				const cardsContainer = $( el ).find( '.cards.cards-desktop' );
				const cardsDesktop = $( cardsContainer ).find( '.gl-card' );
				const cards = $( el ).find( '.gl-card' );
				const heading = $( el ).find( '.heading-wrapper' );
				const preHead = $( heading ).find( 'h2' );
				const headCopy = $( heading ).find( 'p' );
				const headingContainer = $( heading ).find( '.heading-container' );
				const headingText = $( headingContainer ).find( 'svg' );
				const letters = $( headingText ).children();
				let animationWait = 0;

				$( el ).on( 'mouseenter', function( ) {
					$( el ).find( '.content-wrapper' ).addClass( 'nudge' );
				} );

				$( el ).on( 'mouseleave', function( ) {
					$( el ).find( '.content-wrapper' ).removeClass( 'nudge' );
				} );

				gsap.set( cardsContainer, { y: 300 } );

				gsap.to( cardsContainer, {
					scrollTrigger: {
						trigger: el,
						start: 'center-=50% center',
						onEnter: ( ) => {
							gsap.to( cardsContainer, { x: 0, y: 0 } );
							setTimeout( ( ) => {
								gsap.to( cardsDesktop, { x: 0, y: 0 } );
								setTimeout( ( ) => {
									$( '.gl-b-cards .default' ).addClass( 'flipped' );
								}, 1000 );
							}, 500 );
						},
					},
				} );

				cardsDesktop.each( ( index, element ) => {
					if ( index === 0 ) {
						gsap.to( element, { y: 20, x: 300 } );
					} else if ( index === 1 ) {
						gsap.to( element, { y: 20, x: 50 } );
					} else {
						gsap.to( element, { y: 20, x: -250 } );
					}
				} );

				$( cards ).on( 'mouseenter', function( ) {
					$( '.lbd-cursor span' ).text( 'Read' );
					$( '.lbd-cursor' ).addClass( 'bigger' );
				} );

				$( cards ).on( 'mouseleave', function( ) {
					$( '.lbd-cursor span' ).empty( );
					$( '.lbd-cursor' ).removeClass( 'bigger' );
				} );

				$( cards ).on( 'click', function( ) {
					if ( $( this ).hasClass( 'flipped' ) ) {
						$( this ).removeClass( 'flipped' );
					} else {
						$( cards ).removeClass( 'flipped' );
						$( this ).toggleClass( 'flipped' );
					}
				} );

				if ( $( window ).width() > 1020 ) {
					gsap.to( el, {
						scrollTrigger: {
							trigger: el,
							start: 'top-=25% center',
							end: 'bottom center',
							onEnter: ( ) => {
								const count = letters.length;
								let delay = 0;
								$( el ).find( '.content-wrapper' ).addClass( 'slide' );
								gsap.to( preHead, { opacity: 1 } );
								for ( let index = count - 1; index >= 0; index-- ) {
									gsap.to( letters[ index ], { y: 0, delay: 0.05 * delay, ease: 'elastic(1,1)' } );
									delay++;
								}
								setTimeout( ( ) => {
									gsap.to( headCopy, { opacity: 1 } );
								}, 300 );
							},
							onLeaveBack: ( ) => {
								$( el ).find( '.content-wrapper' ).removeClass( 'slide' );
							},
						},
					} );
				} else {
					animationWait = setInterval( ( ) => {
						if ( $( el ).hasClass( 'play' ) ) {
							gsap.to( el, {
								scrollTrigger: {
									trigger: el,
									start: 'top-=25% center',
									end: 'bottom center',
									onEnter: ( ) => {
										const count = letters.length;
										let delay = 0;
										$( el ).find( '.content-wrapper' ).addClass( 'slide' );
										gsap.to( preHead, { opacity: 1 } );
										for ( let index = count - 1; index >= 0; index-- ) {
											gsap.to( letters[ index ], { y: 0, delay: 0.05 * delay, ease: 'elastic(2,2)' } );
											delay++;
										}
										setTimeout( ( ) => {
											gsap.to( headCopy, { opacity: 1 } );
										}, 300 );
									},
									onLeaveBack: ( ) => {
										$( el ).find( '.content-wrapper' ).removeClass( 'slide' );
									},
								},
							} );
							clearInterval( animationWait );
						}
					}, 100 );
				}
			} );
		}
	};

	const initializeRunning = function( ) {
		const runningNumbersWrapper = $( '.gl-b-running-numbers-with-carousel' );

		if ( runningNumbersWrapper.length > 0 ) {
			runningNumbersWrapper.each( ( i, el ) => {
				const carouselDesktop = $( el ).find( '.testimonials-carousel' );
				const carouselTablet = $( el ).find( '.testimonials-carousel-tablet' );
				const carouselMobile = $( el ).find( '.testimonials-carousel-mobile' );
				const runningNumbers = $( el ).find( '.running-numbers' );
				const headingContainer = $( el ).find( '.heading-container' );
				const headingContainerMobile = $( el ).find( '.heading-container-mobile' );

				headingContainer.each( ( ) => {
					const letters = $( headingContainer ).find( 'svg' ).children();
					ScrollTrigger.create( {
						trigger: headingContainer,
						start: 'top-=200px center',
						end: 'top center',
						onEnter: ( ) => {
							const count = letters.length;
							let delay = 0;
							for ( let index = count - 1; index >= 0; index-- ) {
								gsap.to( letters[ index ], { y: 0, delay: 0.05 * delay, ease: 'elastic(1,1)' } );
								delay++;
							}
						},
					} );
				} );

				if ( headingContainerMobile.length > 0 ) {
					const letters = $( headingContainerMobile ).find( 'svg' ).children();
					ScrollTrigger.create( {
						trigger: headingContainer,
						start: 'top center',
						end: 'top center',
						onEnter: ( ) => {
							const count = letters.length;
							let delay = 0;
							for ( let index = count - 1; index >= 0; index-- ) {
								gsap.to( letters[ index ], { y: 0, delay: 0.05 * delay, ease: 'elastic(1,1)' } );
								delay++;
							}
						},
					} );
				}

				if ( runningNumbers.length > 0 ) {
					const numbers = $( runningNumbers ).find( '.number' );
					gsap.set( numbers, { opacity: 0, y: 20 } );

					function formatNumber( number ) {
						return number.toLocaleString();
					}

					ScrollTrigger.create( {
						trigger: runningNumbers,
						start: 'top center',
						end: 'top center',
						onEnter: () => {
							gsap.to( numbers, {
								opacity: 1,
								y: 0,
								stagger: 0.2,
								onStart: ( ) => {
									$( numbers ).each( ( index, element ) => {
										const total = parseInt( $( element ).find( 'h2' ).data( 'total' ) );
										let current = parseInt( $( element ).find( 'h2' ).data( 'start' ) );
										const range = total - current;
										const step = Math.abs( Math.floor( 1500 / range ) );

										const counter = setInterval( ( ) => {
											if ( current <= total ) {
												$( element ).find( 'h2' ).html( formatNumber( current ) );
												current++;
											} else {
												clearInterval( counter );
											}
										}, step );
									} );
								},
							} );
						},
					} );
				}

				const swiperDesktop = new Swiper( carouselDesktop.get( 0 ), {
					loop: true,
					slidesPerView: 4.5,
					spaceBetween: 15,
					speed: 5000,
					freeMode: true,
					allowTouchMove: false,
					autoplay: {
						delay: 0,
						disableOnInteraction: false,
					},
					on: {
						init: ( ) => {
							setTimeout( ( ) => {
								ScrollTrigger.refresh( );
							}, 500 );
						},
					},
					breakpoints: {
						1024: {
							slidesPerView: 3,
						},
						1240: {
							slidesPerView: 4.5,
						},
					},
				} );

				new Swiper( carouselTablet.get( 0 ), {
					loop: false,
					slidesPerView: 'auto',
					spaceBetween: 15,
					freemode: true,
					mousewheel: {
						forceToAxis: true,
					},
				} );

				new Swiper( carouselMobile.get( 0 ), {
					loop: false,
					slidesPerView: 'auto',
					centeredSlides: true,
					spaceBetween: 15,
					mousewheel: {
						forceToAxis: true,
					},
					pagination: {
						el: '.swiper-pagination',
						type: 'bullets',
						clickable: true,
					},
				} );

				function stopAutoplay( ) {
					const carouselTranslate = swiperDesktop.getTranslate( );
					swiperDesktop.setTranslate( carouselTranslate );
					swiperDesktop.autoplay.stop( );
				}

				function startAutoplay( ) {
					let delay = 2500;
					if ( getActiveSlideDistance( ) < 100 ) {
						delay = 500;
					}
					swiperDesktop.slideTo( swiperDesktop.activeIndex, delay, false );
					swiperDesktop.autoplay.start( );
				}

				function getActiveSlideDistance() {
					const activeSlide = swiperDesktop.slides[ swiperDesktop.activeIndex ];
					const rect = activeSlide.getBoundingClientRect();
					return rect.left;
				}

				$( '.testimonials-wrapper' ).on( 'mouseenter', function( ) {
					stopAutoplay( );
				} );

				$( '.testimonials-wrapper' ).on( 'mouseleave', function( ) {
					startAutoplay( );
				} );
			} );
		}
	};

	const initializeTeam = function( ) {
		const teamSection = $( '.gl-b-team' );

		if ( teamSection.length > 0 ) {
			teamSection.each( ( i, el ) => {
				const headingContainer = $( el ).find( '.heading' );
				const headingChildren = $( headingContainer ).find( '.animate-entry' );
				const animatedContainer = $( el ).find( '.heading-container' );
				const postIt = $( el ).find( '.post-it-card' );
				const letters = $( animatedContainer ).find( 'svg' ).children();

				gsap.set( headingChildren, { y: 40, opacity: 0 } );
				gsap.set( postIt, { opacity: 0 } );

				postIt.each( ( index, card ) => {
					gsap.to( card, {
						opacity: 1,
						delay: 0.3 * index,
						scrollTrigger: {
							trigger: $( card ),
							start: 'top-=30% center',
							end: 'top-=30% center',
						},
					} );
				} );

				gsap.to( headingChildren, {
					y: 0,
					opacity: 1,
					stagger: 0.5,
					scrollTrigger: {
						trigger: $( el ),
						start: 'top-=15% center',
						end: 'top-=15% center',
						onEnter: ( ) => {
							const count = letters.length;
							let delay = 0;
							for ( let index = count - 1; index >= 0; index-- ) {
								gsap.to( letters[ index ], { y: 0, delay: 0.05 * delay, ease: 'elastic(1,1)' } );
								delay++;
							}
						},
					},
				} );
			} );
		}
	};
	
	const initializeRotatingCarousel = function( ) {
		const rotatingCarousel = $( '.gl-b-rotating-carousel' );

		rotatingCarousel.each( ( i, el ) => {
			const carousel = $( el ).find( '.carousel-rotate' );
			const headingContainer = $( el ).find( '.heading-container' );
			const headingContainerMobile = $( el ).find( '.heading-container-mobile' );
			const shapeTop = $( el ).find( '.shape-top' );
			const letters = $( headingContainer ).find( 'svg' ).children();
			const lettersMobile = $( headingContainerMobile ).find( 'svg' ).children();

			ScrollTrigger.create( {
				trigger: headingContainer,
				start: 'top-=200px center',
				end: 'top center',
				onEnter: ( ) => {
					const count = letters.length;
					let delay = 0;
					for ( let index = count - 1; index >= 0; index-- ) {
						gsap.to( letters[ index ], { y: 0, delay: 0.05 * delay, ease: 'elastic(1,1)' } );
						delay++;
					}
				},
			} );

			ScrollTrigger.create( {
				trigger: headingContainerMobile,
				start: 'top center',
				end: 'top center',
				onEnter: ( ) => {
					const countMobile = lettersMobile.length;
					let delayMobile = 0;
					for ( let indexMobile = countMobile - 1; indexMobile >= 0; indexMobile-- ) {
						gsap.to( lettersMobile[ indexMobile ], { y: 0, delay: 0.05 * delayMobile, ease: 'elastic(1,1)' } );
						delayMobile++;
					}
				},
			} );

			gsap.matchMedia().add( '(min-width: 1024px)', () => {
				gsap.to( shapeTop, {
					scale: 3,
					ease: 'ease.linear',
					scrollTrigger: {
						trigger: headingContainer,
						start: 'top center',
						end: 'top+=200px center',
						scrub: 1,
					},
				} );
			} );

			gsap.matchMedia().add( '(max-width: 1023px)', () => {
				gsap.to( shapeTop, {
					scale: 3,
					ease: 'ease.linear',
					scrollTrigger: {
						trigger: headingContainer,
						start: 'top+=400px center',
						end: 'top+=500px center',
						scrub: 1,
					},
				} );
			} );

			const carouselRotate = new Swiper( $( carousel ).get( 0 ), {
				slidesPerView: 1,
				spaceBetween: 0,
				centeredSlides: true,
				speed: 1200,
				breakpoints: {
					1024: {
						slidesPerView: 2.3,
						loop: true,
						loopPreventsSliding: false,
						centeredSlides: true,
						speed: 800,
						spaceBetween: 150,
					},
					1300: {
						slidesPerView: 2.3,
						loop: true,
						loopPreventsSliding: false,
						centeredSlides: true,
						speed: 800,
						spaceBetween: 200,
					},
				},
			} );

			$( '.gl-b-rotating-carousel' ).on( 'click', '.swiper-slide-prev', ( e ) => {
				const clicked = e.currentTarget;
				const index = $( clicked ).data( 'swiper-slide-index' );
				const color = $( clicked ).data( 'color' );
				$( el ).find( '.shape-top path' ).attr( 'fill', '#' + color );
				$( el ).css( 'background-image', `linear-gradient(to bottom, transparent 10%, #${ color } 10% )` );
				carouselRotate.slideToLoop( index );
			} );

			$( '.gl-b-rotating-carousel' ).on( 'click', '.swiper-slide-next', ( e ) => {
				const clicked = e.currentTarget;
				const index = $( clicked ).data( 'swiper-slide-index' );
				const color = $( clicked ).data( 'color' );
				$( el ).find( '.shape-top path' ).attr( 'fill', '#' + color );
				$( el ).css( 'background-image', `linear-gradient(to bottom, transparent 10%, #${ color } 10% )` );
				carouselRotate.slideToLoop( index );
			} );

			carouselRotate.on( 'slideChange', function( e ) {
				const activeSlide = $( carousel ).find( '.swiper-slide' ).get( e.activeIndex );
				const color = $( activeSlide ).data( 'color' );
				$( el ).find( '.content' ).css( 'backgroundColor', '#' + color );
				$( el ).find( '.shape-top path' ).attr( 'fill', '#' + color );
				$( el ).css( 'background-image', `linear-gradient(to bottom, transparent 10%, #${ color } 10% )` );
			} );

			gsap.matchMedia().add( '(min-width: 1024px)', () => {
				ScrollTrigger.create( {
					trigger: el,
					start: 'center center',
					onEnter: () => {
						carouselRotate.slideNext();
					},
					onLeaveBack: () => {
						carouselRotate.slidePrev();
					},
				} );

				ScrollTrigger.create( {
					trigger: el,
					start: 'center+=25% center',
					onEnter: () => {
						carouselRotate.slideNext();
					},
					onLeaveBack: () => {
						carouselRotate.slidePrev();
					},
				} );
			} );

			gsap.matchMedia().add( '(min-width: 768px) and (max-width:1024px)', () => {
				ScrollTrigger.create( {
					trigger: el,
					start: 'center-=15% center',
					onEnter: () => {
						carouselRotate.slideNext();
					},
					onLeaveBack: () => {
						carouselRotate.slidePrev();
					},
				} );

				ScrollTrigger.create( {
					trigger: el,
					start: 'center+=20% center',
					onEnter: () => {
						carouselRotate.slideNext();
					},
					onLeaveBack: () => {
						carouselRotate.slidePrev();
					},
				} );
			} );

			gsap.matchMedia().add( '(max-width: 767px)', ( ) => {
				ScrollTrigger.create( {
					trigger: el,
					start: 'center-=10% center',
					onEnter: () => {
						carouselRotate.slideNext();
					},
					onLeaveBack: () => {
						carouselRotate.slidePrev();
					},
				} );

				ScrollTrigger.create( {
					trigger: el,
					start: 'bottom-=20% center',
					onEnter: () => {
						carouselRotate.slideNext();
					},
					onLeaveBack: () => {
						carouselRotate.slidePrev();
					},
				} );
			} );
		} );
	};

	const initializeContact = function( ) {
		const contactContainer = $( '.gl-b-contact-block' );
		const contactForm = $( '.gl-b-contact-block form' );
		const enquiry = $( contactForm ).find( 'select' );
		const typeOfEnquries = $( enquiry ).find( 'option' ).clone();
		const cloneCheckbox = $( contactContainer ).find( '.pull-contact' ).children().clone();
		const cloneButton = $( contactContainer ).find( '.pull-contact-submit' ).children().clone();
		const contactContent = $( contactContainer ).find( '.content' );

		if ( contactContainer.length > 0 ) {
			contactContainer.each( ( i, el ) => {
				const lottieDesktop = $( el ).find( '#lottie-desktop' );
				const lottieMobile = $( el ).find( '#lottie-mobile' );
				const lottieSuccess = $( el ).find( '#lottie-success' );

				lottie.loadAnimation( {
					container: lottieDesktop.get( 0 ),
					renderer: 'svg',
					loop: false,
					autoplay: true,
					path: $( lottieDesktop ).data( 'file' ),
				} );

				lottie.loadAnimation( {
					container: lottieMobile.get( 0 ),
					renderer: 'svg',
					loop: false,
					autoplay: true,
					path: $( lottieDesktop ).data( 'file' ),
				} );

				const successLottie = lottie.loadAnimation( {
					container: lottieSuccess.get( 0 ),
					renderer: 'svg',
					loop: false,
					autoplay: false,
					path: $( lottieSuccess ).data( 'file' ),
				} );

				if ( typeOfEnquries.length > 0 ) {
					const customDropdown = $( contactForm ).find( '.custom-dropdown' );
					$( customDropdown ).append( '<ul class="list-style-none"></ul>' );
					typeOfEnquries.each( ( index, element ) => {
						if ( index !== 0 ) {
							$( customDropdown ).find( 'ul' ).append( '<li value="' + element.innerHTML + '"><span>' + element.innerHTML + '</span></li>' );
						}
					} );
					setTimeout( ( ) => {
						new SimpleBar( customDropdown[ 0 ] );
					}, 500 );
				}

				$( '.blocker' ).on( 'click', function( ) {
					if ( $( this ).hasClass( 'show' ) ) {
						$( this ).removeClass( 'show' );
						$( '.custom-dropdown' ).hide( );

						if ( $( enquiry ).val( ) === '' ) {
							$( this ).next( ).removeClass( 'has-value' );
						}
					} else {
						$( this ).addClass( 'show' );
						$( '.custom-dropdown' ).show( );
						$( this ).next( ).addClass( 'has-value' );
					}
				} );

				$( '.blocker' ).on( 'mouseenter', function( ) {
					if ( $( enquiry ).val( ) === '' ) {
						$( this ).next( ).find( 'select' ).addClass( 'hover-effect' );
					}
				} );

				$( '.blocker' ).on( 'mouseleave', function( ) {
					if ( $( enquiry ).val( ) === '' ) {
						$( this ).next( ).find( 'select' ).removeClass( 'hover-effect' );
					}
				} );

				$( '.custom-dropdown li' ).on( 'click', function( ) {
					const value = $( this ).attr( 'value' );
					$( '.custom-dropdown li' ).removeClass( 'active' );
					$( this ).addClass( 'active' );
					$( enquiry ).val( value );
					$( enquiry ).removeClass( 'wpcf7-not-valid' );
					$( enquiry ).attr( 'aria-invalid', 'false' );
					$( enquiry ).next( ).remove( );
					$( enquiry ).addClass( 'valid' );
					$( '.custom-dropdown' ).hide( );
					$( '.blocker' ).removeClass( 'show' );
				} );

				$( contactForm ).find( 'input, textarea' ).on( 'focus', function( ) {
					$( this ).parent( ).addClass( 'has-value' );
				} );

				$( contactForm ).find( 'input, textarea' ).on( 'blur', function( ) {
					if ( $( this ).val(	) === '' ) {
						$( this ).parent( ).removeClass( 'has-value' );
					}
				} );

				$( contactForm ).find( 'textarea' ).attr( 'data-lenis-prevent', true );

				const wpcf7Elm = document.querySelector( '.gl-b-contact-block .wpcf7' );
				const successContainer = $( contactContainer ).find( '.success-message' );
				const arcs = $( successContainer ).find( '.arcs' );

				wpcf7Elm.addEventListener( 'wpcf7mailsent', function( ) {
					$( '.success-message' ).addClass( 'show' );
					$( 'html,body' ).animate( { scrollTop: 0 }, 0 );
					$( contactContent ).hide();
					gsap.to( arcs, {
						y: 0,
						stagger: 0.3,
					} );

					setTimeout( ( ) => {
						gsap.to( $( successContainer ).find( '.message' ), {
							opacity: 1,
						} );
						successLottie.play( );
					}, 1200 );
				}, false );

				if ( cloneCheckbox.length > 0 ) {
					$( '#accept-checkbox' ).after( $( cloneCheckbox ) );
					$( '.pull-contact' ).remove( );
				}

				if ( cloneButton.length > 0 ) {
					$( contactContainer ).find( '#contact-submit' ).after( $( cloneButton ) );
					$( contactContainer ).find( '#contact-submit' ).remove( );
					$( '.pull-contact-submit' ).remove( );
				}

				$( '.custom-checkbox' ).on( 'click', function( ) {
					$( this ).toggleClass( 'checked' );

					if ( $( this ).hasClass( 'checked' ) ) {
						$( '#accept-checkbox' ).attr( 'checked', false );
					} else {
						$( '#accept-checkbox' ).attr( 'checked', true );
					}
				} );
			} );

			$( '.open-panel' ).on( 'click', function( e ) {
				e.preventDefault();
				$( '.gl-sliding-panel' ).addClass( 'slide' );
				$( '.panel-overlay' ).addClass( 'show' );
				$( '.site-header, #site-navigation' ).hide();
			} );

			$( '.panel-overlay' ).on( 'click', function( ) {
				$( '.gl-sliding-panel' ).removeClass( 'slide' );
				$( '.panel-overlay' ).removeClass( 'show' );
				$( '.site-header, #site-navigation' ).show();
			} );
		}
	};

	const initializeCta = function() {
		const ctaSection = $( '.gl-b-cta-section' );
		const newsletter = $( '.gl-b-cta-section.newsletter' );
		const simple = $( '.gl-b-cta-section-contact.simple' );
		let formCheck = false;

		function colorTransition( element ) {
			const prevContainer = $( element ).parent().prev().find( '.acf-innerblocks-container' );
			const prevContainerInside = $( element ).parent().prev();
			const animationTarget = prevContainer.children().length > 1 ? prevContainer.children().last() : prevContainer.children().first();
			if ( prevContainer.length > 0 && animationTarget.hasClass( 'with-bg-color' ) ) {
				const blocks = [ animationTarget, element.parent() ];
				blocks.forEach( function( elem ) {
					const color = elem.css( 'background-color' );
					ScrollTrigger.create( {
						trigger: elem,
						start: 'top 45%',
						end: 'bottom 45%',
						onEnter: () => gsap.to( [ `.with-bg-color`, element.parent() ], { backgroundColor: color } ),
						onEnterBack: () => gsap.to( [ `.with-bg-color`, element.parent() ], { backgroundColor: color } ),
					} );
				} );
				$( element.parent() ).css( 'background-color', animationTarget.css( 'background-color' ) );
			} else if ( prevContainerInside.hasClass( 'with-bg-color' ) ) {
				const blocks = [ prevContainerInside, element.parent() ];
				blocks.forEach( function( elem ) {
					const color = elem.css( 'background-color' );
					ScrollTrigger.create( {
						trigger: elem,
						start: 'top 45%',
						end: 'bottom 45%',
						onEnter: () => gsap.to( [ prevContainerInside, element.parent() ], { backgroundColor: color } ),
						onEnterBack: () => gsap.to( [ prevContainerInside, element.parent() ], { backgroundColor: color } ),
						scrub: true,
					} );
				} );
				$( element.parent() ).css( 'background-color', prevContainerInside.css( 'background-color' ) );
			}
		}

		if ( ctaSection.length > 0 ) {
			ctaSection.each( ( i, el ) => {
				ScrollTrigger.create( {
					trigger: el,
					start: 'top-=30% center',
					end: 'top center',
					onEnter: () => {
						$( '.announcement-card' ).addClass( 'scroll-hide' );
						$( '.announcement' ).addClass( 'hide' );
					},
					onLeaveBack: () => {
						$( '.announcement-card' ).removeClass( 'scroll-hide' );
						$( '.announcement' ).removeClass( 'hide' );
					},
				} );
			} );
			setTimeout( ( ) => {
				colorTransition( simple );
			}, 1000 );
		}

		if ( newsletter.length > 0 ) {
			setTimeout( ( ) => {
				colorTransition( newsletter );
			}, 1000 );
			const successContainer = document.querySelector( '.newsletter-success-message' );
			const lottieFile = $( '.newsletter-success-message' ).find( '#lottie-success' );

			newsletter.each( ( i, el ) => {
				const formEl = $( el ).find( 'form' );
				const selectBox = $( formEl ).find( 'select' );
				const selectOptions = $( selectBox ).find( 'option' ).clone();
				const arcs = $( successContainer ).find( '.arcs' );
				const lottieAnimation = lottie.loadAnimation( {
					container: lottieFile.get( 0 ),
					renderer: 'svg',
					loop: false,
					autoplay: false,
					path: $( lottieFile ).data( 'file' ),
				} );

				if ( selectOptions.length > 0 ) {
					const customDropdown = $( formEl ).find( '.custom-dropdown' );
					$( customDropdown ).append( '<ul class="list-style-none"></ul>' );
					selectOptions.each( ( index, element ) => {
						if ( index !== 0 ) {
							if ( element.innerHTML === 'Singapore' ) {
								$( customDropdown ).find( 'ul' ).append( '<li value="' + element.innerHTML + '" active>' + element.innerHTML + '</li>' );
							} else {
								$( customDropdown ).find( 'ul' ).append( '<li value="' + element.innerHTML + '">' + element.innerHTML + '</li>' );
							}
						}
					} );

					setTimeout( ( ) => {
						new SimpleBar( customDropdown[ 0 ] );
					}, 500 );
				}

				$( selectBox ).val( 'Singapore' );

				$( '.blocker' ).on( 'click', function( ) {
					if ( $( this ).hasClass( 'show' ) ) {
						$( this ).removeClass( 'show' );
						$( '.custom-dropdown' ).hide( );
					} else {
						$( this ).addClass( 'show' );
						$( '.custom-dropdown' ).show( );
					}
				} );

				$( '.blocker' ).on( 'mouseenter', function( ) {
					if ( $( selectBox ).val( ) === '' ) {
						$( this ).next( ).find( 'select' ).addClass( 'hover-effect' );
					}
				} );

				$( '.blocker' ).on( 'mouseleave', function( ) {
					if ( $( selectBox ).val( ) === '' ) {
						$( this ).next( ).find( 'select' ).removeClass( 'hover-effect' );
					}
				} );

				$( '.custom-dropdown li' ).on( 'click', function( ) {
					const value = $( this ).attr( 'value' );
					$( '.custom-dropdown li' ).removeClass( 'active' );
					$( this ).addClass( 'active' );
					$( selectBox ).val( value );
					$( selectBox ).addClass( 'valid' );
					$( '.custom-dropdown' ).hide( );
					$( '.blocker' ).removeClass( 'show' );
				} );

				$( formEl ).find( 'input, email' ).on( 'focus', function( ) {
					$( this ).parent( ).addClass( 'has-value' );
				} );

				$( formEl ).find( 'input, email' ).on( 'blur', function( ) {
					if ( $( this ).val(	) === '' ) {
						$( this ).parent( ).removeClass( 'has-value' );
					}
				} );

				$( '.gl-b-cta-section form.wpcf7-form .gl-b-submit' ).on( 'click', function( ) {
					let country;

					const cookie = {};
					document.cookie.split( ';' ).forEach( function( cookieVal ) {
						const [ key, value ] = cookieVal.split( '=' );
						cookie[ key.trim( ) ] = value;
					} );

					const form = $( this ).parent( );
					const formData = form.serialize( );

					const requiredFields = [ 'first-name', 'last-name', 'email', 'country' ];
					checkFormFields( formData, requiredFields );

					setTimeout( ( ) => {
						if ( ! $( '.gl-b-cta-section form.wpcf7-form' ).hasClass( 'invalid' ) && formCheck ) {
							$.ajax( {
								type: 'POST',
								url: ajaxVar.ajaxUrl,
								data: {
									action: 'submit_to_hubspot', // The AJAX action hook
									form_data: formData,
									hubSpotToken: cookie.hubspotutk,
									country,
									page_title: ajaxVar.page_title,
									nonce: ajaxVar.nonce,
								},
								success: ( response ) => {
									const apiResponse = $.parseJSON( response.data );
									const inlineMessage = apiResponse.inlineMessage;

									if ( inlineMessage && inlineMessage === 'Thanks for submitting the form.' || inlineMessage && inlineMessage === 'Thank you for subscribing to our newsletter!&#xa0;' ) {
										$( successContainer ).addClass( 'show' );
										$( 'html, body' ).addClass( 'no-scroll' );
										gsap.to( arcs, {
											y: 0,
											stagger: {
												amount: 0.1,
												from: 'end',
											},
										} );

										setTimeout( ( ) => {
											gsap.to( arcs, {
												y: '100vh',
												stagger: {
													amount: 0.3,
													from: 'end',
												},
												ease: 'linear',
											} );
											gsap.to( '.newsletter-success-message .message', {
												opacity: 0,
											} );
										}, 6000 );

										setTimeout( ( ) => {
											$( successContainer ).removeClass( 'show' );
											$( 'html, body' ).removeClass( 'no-scroll' );
											lottieAnimation.goToAndStop( 0, true );
										}, 8000 );

										setTimeout( ( ) => {
											gsap.to( $( successContainer ).find( '.message' ), {
												opacity: 1,
											} );
											lottieAnimation.play( );
										}, 900 );

										$( form ).trigger( 'reset' );
										$( selectBox ).val( 'Singapore' );
										$( '.gl-b-cta-section .wpcf7-form-control-wrap' ).removeClass( 'has-value' );
									}
								},
								error: ( ) => {
									$( form ).trigger( 'reset' );
									$( selectBox ).val( 'Singapore' );
								},
							} );
						}
					}, 200 );
				} );
			} );
		}

		function checkFormFields( serializedData, requiredFields ) {
			const formData = new URLSearchParams( serializedData );

			for ( const field of requiredFields ) {
				const fieldValue = formData.get( field );

				if ( ! formData.has( field ) || ! formData.get( field ).trim( ) ) {
					formCheck = false;
					return false;
				}

				if ( field === 'email' && ! isValidEmail( fieldValue ) ) {
					formCheck = false;
					return false;
				}
			}

			formCheck = true;
			return true;
		}

		// Validate Email
		function isValidEmail( email ) {
			const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
			return emailRegex.test( email );
		}
	};
	
	

	$( document ).ready( function() {
		initializeDraggableCards();
		initializeCards();
		initializeRunning();
		initializeTeam();
		initializeRotatingCarousel();
		initializeContact();
		initializeCta();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=acf/rotating-cards', initializeCards );
		window.acf.addAction( 'render_block_preview/type=running-numbers-with-carousel', initializeRunning );
		window.acf.addAction( 'render_block_preview/type=team', initializeTeam );
		window.acf.addAction( 'render_block_preview/type=rotating-carousel', initializeRotatingCarousel );
		window.acf.addAction( 'render_block_preview/type=acf/contact-block', initializeContact );
		window.acf.addAction( 'render_block_preview/type=cta_sections', initializeCta );
	}

	
}( jQuery ) );
	


