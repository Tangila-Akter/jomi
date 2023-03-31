<img width="124" height="60"
                                                            src="{{ asset('user/wp-content/uploads/2023/01/logo.webp')}}"
                                                            class="attachment-large size-large wp-image-27"
                                                            alt="" loading="lazy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-65021e2"
                                            data-id="65021e2" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-2de6eaa e-transform wpr-main-menu-align-left wpr-main-menu-align--tabletleft wpr-main-menu-align--mobileleft wpr-pointer-underline wpr-pointer-line-fx wpr-pointer-fx-fade wpr-sub-icon-caret-down wpr-sub-menu-fx-fade wpr-nav-menu-bp-mobile wpr-mobile-menu-full-width wpr-mobile-menu-item-align-center wpr-mobile-toggle-v1 wpr-sub-divider-yes wpr-mobile-divider-yes elementor-widget elementor-widget-wpr-nav-menu"
                                                    data-id="2de6eaa" data-element_type="widget"
                                                    data-settings="{&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;menu_layout&quot;:&quot;horizontal&quot;,&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                    data-widget_type="wpr-nav-menu.default">
                                                    <div class="elementor-widget-container">
                                                        <nav class="wpr-nav-menu-container wpr-nav-menu-horizontal"
                                                            data-trigger="hover" >
                                                            <ul id="menu-1-2de6eaa" class="wpr-nav-menu">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-39">
                                                                    <a href="{{ url('/') }}" aria-current="page"
                                                                        class="wpr-menu-item wpr-pointer-item wpr-active-menu-item menu-link">Home</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38">
                                                                    <a href="{{ url('/user_about') }}"
                                                                        class="wpr-menu-item wpr-pointer-item menu-link">About</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37">
                                                                    <a href="{{ url('/user_post') }}"
                                                                        class="wpr-menu-item wpr-pointer-item menu-link">Post
                                                                        a listing</a></li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36">
                                                                    <a href="{{ url('/list') }}"
                                                                        class="wpr-menu-item wpr-pointer-item menu-link">Listing</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35">
                                                                    <a href="{{ url('/contact') }}"
                                                                        class="wpr-menu-item wpr-pointer-item menu-link">Contact</a>
                                                                </li>
                                                                {{-- @guest
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40">
                                                                    <a href="{{ url('register') }}"
                                                                        class="wpr-menu-item wpr-pointer-item menu-link">Sign
                                                                        in</a></li>
                                                                @endguest --}}
                                                                @if (Route::has('login'))
                                                                @auth
                                                                        <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40">
                                                                        
                                                                        <a class="" ><x-app-layout></x-app-layout></a></li>
                                                                        @else
                                                    
                                                                            @if (Route::has('register'))
                                                                            <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40">
                                                                    <a href="{{ url('register') }}"
                                                                        class="wpr-menu-item wpr-pointer-item menu-link">Sign
                                                                        in</a></li>
                                                                            @endif
                                                                        @endauth
                                                                        @endif
                                                            </ul>
                                                        </nav>
                                                        <nav class="wpr-mobile-nav-menu-container">
                                                            <div class="wpr-mobile-toggle-wrap">
                                                                <div class="wpr-mobile-toggle"><span
                                                                        class="wpr-mobile-toggle-line"></span><span
                                                                        class="wpr-mobile-toggle-line"></span><span
                                                                        class="wpr-mobile-toggle-line"></span></div>
                                                            </div>
                                                            <ul id="mobile-menu-2-2de6eaa"
                                                                class="wpr-mobile-nav-menu">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-39">
                                                                    <a href="{{ url('/home') }}" aria-current="page"
                                                                        class="wpr-mobile-menu-item wpr-active-menu-item menu-link">Home</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38">
                                                                    <a href="index.php/about/index.html"
                                                                        class="wpr-mobile-menu-item menu-link">About</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37">
                                                                    <a href="{{ url('/user_post') }}"
                                                                        class="wpr-mobile-menu-item menu-link">Post a
                                                                        listing</a></li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36">
                                                                    <a href="{{ url('/list') }}"
                                                                        class="wpr-mobile-menu-item menu-link">Listing</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35">
                                                                    <a href="{{ url('/contact') }}"
                                                                        class="wpr-mobile-menu-item menu-link">Contact</a>
                                                                </li>
                                                                @if (Route::has('login'))
                                                                @auth
                                                                        <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40">
                                                                        
                                                                        <a class="" ><x-app-layout></x-app-layout></a></li>
                                                                        @else
                                                    
                                                                            @if (Route::has('register'))
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40">
                                                                    <a href="#"
                                                                        class="wpr-mobile-menu-item menu-link">Sign
                                                                        in</a></li>
                                                                        @endif
                                                                        @endauth
                                                                        @endif
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-487379d"
                                            data-id="487379d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-57e9e85 elementor-align-center elementor-tablet-align-center elementor-mobile-align-right elementor-widget elementor-widget-button"
                                                    data-id="57e9e85" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="#"
                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Book Now</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>