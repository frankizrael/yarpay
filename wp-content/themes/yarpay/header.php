<!doctype html>
<html lang="<?php bloginfo( 'language' ) ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
	  <?php
        $entry = get_query_var('ENTRY');
        load_assets(['main', $entry]);
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav>
        <div class="x-container x-flex">
            <div class="left">
                <a href="<?php echo site_url(); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="115.36" height="70.413" viewBox="0 0 115.36 70.413">
                      <g id="Group_193" data-name="Group 193" transform="translate(0.002)">
                        <path id="Path_52" data-name="Path 52" d="M170.39,32.35l5.922,1.932-2.965,5.373-.518-.781-.888-3.609-1.551-2.092Z" transform="translate(-105.462 -20.023)" fill="#822300"/>
                        <path id="Path_53" data-name="Path 53" d="M154.716,16.478l-.85-.2-5.4,2.435.587.488,3.712.709,3.2,2.324Z" transform="translate(-91.895 -10.076)" fill="#edc784"/>
                        <path id="Path_54" data-name="Path 54" d="M130.672,16.28,128.82,21.6h.423l2.534-1.437,4.138-1.223-4.6-2.66Z" transform="translate(-79.733 -10.076)" fill="#822300"/>
                        <path id="Path_55" data-name="Path 55" d="M117.847,32.79s-2.058,3.041-2.1,3.167-.9,4.3-.9,4.3-1.166-2.187-1.25-2.313-1.73-3.506-1.73-3.506Z" transform="translate(-69.235 -20.295)" fill="#edc784"/>
                        <path id="Path_56" data-name="Path 56" d="M111.36,57.435l6.177,2.046V58.9l-2.344-3.513-.743-4.245Z" transform="translate(-68.926 -31.652)" fill="#822300"/>
                        <path id="Path_57" data-name="Path 57" d="M135.433,76.715l-5.476,2.927L128.04,73.8l.762.213,1.479,1.1,2.576,1.075Z" transform="translate(-79.25 -45.678)" fill="#edc784"/>
                        <path id="Path_58" data-name="Path 58" d="M156.406,73.03l-1.821,6.07-6.1-2.515,3.963-1.166Z" transform="translate(-91.901 -45.201)" fill="#822300"/>
                        <path id="Path_59" data-name="Path 59" d="M169.28,59.717l6.135-2.046-2.755-6.15-1.437,5.407Z" transform="translate(-104.775 -31.888)" fill="#edc784"/>
                        <path id="Path_60" data-name="Path 60" d="M115.97,40.023a20.012,20.012,0,1,1,20.01-20.013,20.032,20.032,0,0,1-20.01,20.013m0-39.15A19.137,19.137,0,1,0,135.107,20.01,19.159,19.159,0,0,0,115.97.873" transform="translate(-59.394)" fill="#2d1e0f"/>
                        <path id="Path_61" data-name="Path 61" d="M130,45.422a11.371,11.371,0,1,1,11.371-11.371A11.383,11.383,0,0,1,130,45.422m0-21.873a10.5,10.5,0,1,0,10.5,10.5,10.511,10.511,0,0,0-10.5-10.5" transform="translate(-73.426 -14.037)" fill="#2d1e0f"/>
                        <path id="Path_62" data-name="Path 62" d="M122.537,42.543A15.967,15.967,0,1,1,138.5,26.577a15.984,15.984,0,0,1-15.967,15.967m0-31.057a15.09,15.09,0,1,0,15.09,15.09,15.107,15.107,0,0,0-15.09-15.09" transform="translate(-65.961 -6.567)" fill="#2d1e0f"/>
                        <path id="Path_63" data-name="Path 63" d="M118.341,43.105l-2.069-6.436-6.6-2.374,3.209-6.211-3.216-5.971,6.657-2.065L118.5,13.39l5.857,3.3,6.39-3.049,2.062,6.413,6.653,2.294-3.224,5.758,2.736,6.387-6.387,2.054L130.5,43.006,124.35,39.95ZM111,33.773l6.032,2.168,1.867,5.811,5.442-2.866,5.609,2.786,1.9-5.876,5.861-1.882L135.2,28.053l2.9-5.179-6.032-2.081-1.875-5.834-5.857,2.8-5.285-2.98-1.978,6.028-6.028,1.871,2.908,5.4Z" transform="translate(-67.874 -8.288)" fill="#2d1e0f"/>
                        <path id="Path_64" data-name="Path 64" d="M116.469,40.319l-6.409-5.205-7.743-.636-1.265-8.662L96.49,20.348l5.2-6.794.5-7.358,8.09-.671L116.229.38l6.665,5.335,7.694.37.37,7.918,5.308,6.509L131.3,26.045l-.869,8.471-7.663.533ZM103.14,33.6l7.29.6,6.032,4.9,5.945-4.969,7.175-.5.819-7.987,4.63-5.16-5-6.127-.343-7.374-7.145-.343-6.3-5.034-5.586,4.832-7.591.629-.469,6.832L97.69,20.321l4.249,5.095.019.133Z" transform="translate(-59.722 -0.235)" fill="#2d1e0f"/>
                        <path id="Path_65" data-name="Path 65" d="M0,139.233l5.7,10.525v6.528H8.028v-7.13l5.929-10.026H12.89l-5.2,9.226L2.83,139.168s-2.881.118-2.831.065" transform="translate(0 -86.113)" fill="#2d1e0f"/>
                        <path id="Path_66" data-name="Path 66" d="M266.1,139.233l5.7,10.525v6.528h2.332v-7.13l5.929-10.026H278.99l-5.2,9.226-4.862-9.2c0,.008-2.881.126-2.831.072" transform="translate(-164.699 -86.113)" fill="#2d1e0f"/>
                        <path id="Path_67" data-name="Path 67" d="M55.844,142.806l5.564,13.623h2.53l-7.13-17.289h-.267L49.48,156.429h.865Z" transform="translate(-30.626 -86.119)" fill="#2d1e0f"/>
                        <path id="Path_68" data-name="Path 68" d="M221.324,142.806l5.563,13.623h2.53l-7.13-17.289h-.263l-7.065,17.289h.869Z" transform="translate(-133.048 -86.119)" fill="#2d1e0f"/>
                        <path id="Path_69" data-name="Path 69" d="M120.19,150.146a3.844,3.844,0,0,0-2.233-1.5s5.03-.2,5.731-4.432c0,0,1.166-4.862-6.429-4.9H111.73v17.19H114.1v-7.9h1.265a3.1,3.1,0,0,1,1.7,1.166l5.262,6.863h2.633Zm-2.85-2.267h-3.2v-7.995c-.05-.05,3.4,0,3.4,0a3.952,3.952,0,0,1,3.548,4c.3,4.1-3.75,4-3.75,4" transform="translate(-69.155 -86.23)" fill="#2d1e0f"/>
                        <path id="Path_70" data-name="Path 70" d="M181.982,143.683c-.065-4.4-5.331-4.363-5.331-4.363h-6.6c.05-.05-.034,17.224-.034,17.224h2.465v-7.995h4.6c5.4-1.17,4.9-4.866,4.9-4.866m-2.629.351a3.7,3.7,0,0,1-3.7,3.948h-3.247v-8.12c-.027-.027,2.824-.027,2.824-.027,4.569.377,4.119,4.2,4.119,4.2" transform="translate(-105.233 -86.23)" fill="#2d1e0f"/>
                      </g>
                    </svg>
                </a> 
            </div>
            <div class="right">
                <div class="top-menu">
                    <div class="menu-translate-select">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/assets/img/spain.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bott-menu">
                    <div class="menu-item">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>    
                    </div>
                    <div class="register-user-item">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="14.26" height="14.26" viewBox="0 0 14.26 14.26"><defs><style>.cls-ww-1{fill:#fff}</style></defs><g id="user" transform="translate(-6 -8.005)"><g id="Group_133" data-name="Group 133" transform="translate(6 8.005)"><path id="Path_44" d="M12.172 9.219a7.1 7.1 0 0 0-2.71-1.7 4.122 4.122 0 1 0-4.665 0A7.141 7.141 0 0 0 0 14.26h1.114a6.016 6.016 0 1 1 12.032 0h1.114a7.084 7.084 0 0 0-2.088-5.041zM7.13 7.13a3.008 3.008 0 1 1 3.008-3.008A3.011 3.011 0 0 1 7.13 7.13z" class="cls-ww-1" data-name="Path 44"/></g></g></svg></i>
                        <div class="line-us">
                            <?php
                            if ( is_user_logged_in() ) {
                                $current_user = wp_get_current_user();
                                ?>
                                <a href="<?php echo site_url();?>/mi-perfil"><?php echo $current_user->display_name;?></a>
                                <?php
                            } else {
                                ?>                                
                                <a href="javascript:void(0)" class="openModalLeft" data="perfil">Cuenta</a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>    
                    <div class="cart">
                        <a href="<?php echo site_url();?>/carrito">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="21.642" height="19.067" viewBox="0 0 21.642 19.067"><defs><style>.cls-cart-1{stroke:white;stroke-width:.4px}</style></defs><g id="shopping-cart" transform="translate(.2 .2)"><path id="Path_72" d="M6.843 12.445h11.284a.622.622 0 0 0 .6-.451l2.489-8.711a.622.622 0 0 0-.6-.793H5.408l-.445-2A.622.622 0 0 0 4.355 0H.622a.622.622 0 1 0 0 1.244h3.234L6.1 11.354a1.866 1.866 0 0 0 .741 3.579h11.286a.622.622 0 1 0 0-1.244H6.844a.622.622 0 0 1 0-1.244zm12.948-8.712L17.658 11.2H7.343L5.684 3.733zm0 0" class="cls-cart-1" data-name="Path 72"/><path id="Path_73" d="M150 361.867a1.867 1.867 0 1 0 1.867-1.867 1.869 1.869 0 0 0-1.867 1.867zm1.867-.622a.622.622 0 1 1-.622.622.623.623 0 0 1 .622-.623zm0 0" class="cls-1" data-name="Path 73" transform="translate(-143.778 -345.067)"/><path id="Path_74" d="M362 361.867a1.867 1.867 0 1 0 1.867-1.867 1.869 1.869 0 0 0-1.867 1.867zm1.867-.622a.622.622 0 1 1-.622.622.623.623 0 0 1 .622-.623zm0 0" class="cls-cart-1" data-name="Path 74" transform="translate(-346.984 -345.067)"/></g></svg></i>
                            <span>Cart</span>
                        </a>
                    </div>            
                    <div class="wishlist">
                        <a href="javascript:void(0)" class="openModalLeft" data="wishlist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.1" height="15.258" viewBox="0 0 17.1 15.258"><defs><style>.cls-heart-1{fill:#fff;stroke:#fff;stroke-width:.4px}</style></defs><path id="heart" d="M8.35 14.858a.979.979 0 0 1-.646-.243 182.95 182.95 0 0 0-1.9-1.633 35.318 35.318 0 0 1-4.148-3.894A6.216 6.216 0 0 1 0 5.019a5.22 5.22 0 0 1 1.325-3.565A4.491 4.491 0 0 1 4.665 0a4.2 4.2 0 0 1 2.624.906A5.368 5.368 0 0 1 8.35 2.014 5.369 5.369 0 0 1 9.411.906 4.2 4.2 0 0 1 12.035 0a4.491 4.491 0 0 1 3.341 1.454A5.22 5.22 0 0 1 16.7 5.019a6.215 6.215 0 0 1-1.656 4.069 35.31 35.31 0 0 1-4.144 3.891c-.575.49-1.226 1.045-1.9 1.636a.98.98 0 0 1-.65.243zM4.665.978a3.523 3.523 0 0 0-2.621 1.139 4.246 4.246 0 0 0-1.066 2.9A5.23 5.23 0 0 0 2.41 8.464a34.755 34.755 0 0 0 4.028 3.771c.576.491 1.229 1.047 1.909 1.642.684-.6 1.338-1.153 1.915-1.645a34.761 34.761 0 0 0 4.027-3.771 5.231 5.231 0 0 0 1.431-3.445 4.246 4.246 0 0 0-1.066-2.9A3.523 3.523 0 0 0 12.035.978a3.244 3.244 0 0 0-2.026.7 4.747 4.747 0 0 0-1.128 1.308.618.618 0 0 1-1.061 0A4.743 4.743 0 0 0 6.691 1.68 3.244 3.244 0 0 0 4.665.978zm0 0" class="cls-heart-1" transform="translate(.2 .2)"/></svg>                        
                        </a>
                    </div>   
                    <div class="search">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.345" height="14.858" viewBox="0 0 14.345 14.858"><defs><style>.cls-search-1{fill:#fff}</style></defs><path id="search" d="M15.111 13.533l-3.537-3.678A6 6 0 1 0 6.983 12a5.935 5.935 0 0 0 3.437-1.086l3.563 3.706a.782.782 0 1 0 1.128-1.085zM6.983 1.565A4.434 4.434 0 1 1 2.549 6a4.439 4.439 0 0 1 4.434-4.435z" class="cls-search-1" transform="translate(-.984)"/></svg>                      
                        </a>
                    </div>   
                </div>          
            </div>
        </div>
    </nav>
</header>

<div class="menu-lad">
    <div class="top_m">
        <a href="<?php echo site_url(); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="115.36" height="70.413" viewBox="0 0 115.36 70.413">
              <g id="Group_193" data-name="Group 193" transform="translate(0.002)">
                <path id="Path_52" data-name="Path 52" d="M170.39,32.35l5.922,1.932-2.965,5.373-.518-.781-.888-3.609-1.551-2.092Z" transform="translate(-105.462 -20.023)" fill="#822300"/>
                <path id="Path_53" data-name="Path 53" d="M154.716,16.478l-.85-.2-5.4,2.435.587.488,3.712.709,3.2,2.324Z" transform="translate(-91.895 -10.076)" fill="#edc784"/>
                <path id="Path_54" data-name="Path 54" d="M130.672,16.28,128.82,21.6h.423l2.534-1.437,4.138-1.223-4.6-2.66Z" transform="translate(-79.733 -10.076)" fill="#822300"/>
                <path id="Path_55" data-name="Path 55" d="M117.847,32.79s-2.058,3.041-2.1,3.167-.9,4.3-.9,4.3-1.166-2.187-1.25-2.313-1.73-3.506-1.73-3.506Z" transform="translate(-69.235 -20.295)" fill="#edc784"/>
                <path id="Path_56" data-name="Path 56" d="M111.36,57.435l6.177,2.046V58.9l-2.344-3.513-.743-4.245Z" transform="translate(-68.926 -31.652)" fill="#822300"/>
                <path id="Path_57" data-name="Path 57" d="M135.433,76.715l-5.476,2.927L128.04,73.8l.762.213,1.479,1.1,2.576,1.075Z" transform="translate(-79.25 -45.678)" fill="#edc784"/>
                <path id="Path_58" data-name="Path 58" d="M156.406,73.03l-1.821,6.07-6.1-2.515,3.963-1.166Z" transform="translate(-91.901 -45.201)" fill="#822300"/>
                <path id="Path_59" data-name="Path 59" d="M169.28,59.717l6.135-2.046-2.755-6.15-1.437,5.407Z" transform="translate(-104.775 -31.888)" fill="#edc784"/>
                <path id="Path_60" data-name="Path 60" d="M115.97,40.023a20.012,20.012,0,1,1,20.01-20.013,20.032,20.032,0,0,1-20.01,20.013m0-39.15A19.137,19.137,0,1,0,135.107,20.01,19.159,19.159,0,0,0,115.97.873" transform="translate(-59.394)" fill="#2d1e0f"/>
                <path id="Path_61" data-name="Path 61" d="M130,45.422a11.371,11.371,0,1,1,11.371-11.371A11.383,11.383,0,0,1,130,45.422m0-21.873a10.5,10.5,0,1,0,10.5,10.5,10.511,10.511,0,0,0-10.5-10.5" transform="translate(-73.426 -14.037)" fill="#2d1e0f"/>
                <path id="Path_62" data-name="Path 62" d="M122.537,42.543A15.967,15.967,0,1,1,138.5,26.577a15.984,15.984,0,0,1-15.967,15.967m0-31.057a15.09,15.09,0,1,0,15.09,15.09,15.107,15.107,0,0,0-15.09-15.09" transform="translate(-65.961 -6.567)" fill="#2d1e0f"/>
                <path id="Path_63" data-name="Path 63" d="M118.341,43.105l-2.069-6.436-6.6-2.374,3.209-6.211-3.216-5.971,6.657-2.065L118.5,13.39l5.857,3.3,6.39-3.049,2.062,6.413,6.653,2.294-3.224,5.758,2.736,6.387-6.387,2.054L130.5,43.006,124.35,39.95ZM111,33.773l6.032,2.168,1.867,5.811,5.442-2.866,5.609,2.786,1.9-5.876,5.861-1.882L135.2,28.053l2.9-5.179-6.032-2.081-1.875-5.834-5.857,2.8-5.285-2.98-1.978,6.028-6.028,1.871,2.908,5.4Z" transform="translate(-67.874 -8.288)" fill="#2d1e0f"/>
                <path id="Path_64" data-name="Path 64" d="M116.469,40.319l-6.409-5.205-7.743-.636-1.265-8.662L96.49,20.348l5.2-6.794.5-7.358,8.09-.671L116.229.38l6.665,5.335,7.694.37.37,7.918,5.308,6.509L131.3,26.045l-.869,8.471-7.663.533ZM103.14,33.6l7.29.6,6.032,4.9,5.945-4.969,7.175-.5.819-7.987,4.63-5.16-5-6.127-.343-7.374-7.145-.343-6.3-5.034-5.586,4.832-7.591.629-.469,6.832L97.69,20.321l4.249,5.095.019.133Z" transform="translate(-59.722 -0.235)" fill="#2d1e0f"/>
                <path id="Path_65" data-name="Path 65" d="M0,139.233l5.7,10.525v6.528H8.028v-7.13l5.929-10.026H12.89l-5.2,9.226L2.83,139.168s-2.881.118-2.831.065" transform="translate(0 -86.113)" fill="#2d1e0f"/>
                <path id="Path_66" data-name="Path 66" d="M266.1,139.233l5.7,10.525v6.528h2.332v-7.13l5.929-10.026H278.99l-5.2,9.226-4.862-9.2c0,.008-2.881.126-2.831.072" transform="translate(-164.699 -86.113)" fill="#2d1e0f"/>
                <path id="Path_67" data-name="Path 67" d="M55.844,142.806l5.564,13.623h2.53l-7.13-17.289h-.267L49.48,156.429h.865Z" transform="translate(-30.626 -86.119)" fill="#2d1e0f"/>
                <path id="Path_68" data-name="Path 68" d="M221.324,142.806l5.563,13.623h2.53l-7.13-17.289h-.263l-7.065,17.289h.869Z" transform="translate(-133.048 -86.119)" fill="#2d1e0f"/>
                <path id="Path_69" data-name="Path 69" d="M120.19,150.146a3.844,3.844,0,0,0-2.233-1.5s5.03-.2,5.731-4.432c0,0,1.166-4.862-6.429-4.9H111.73v17.19H114.1v-7.9h1.265a3.1,3.1,0,0,1,1.7,1.166l5.262,6.863h2.633Zm-2.85-2.267h-3.2v-7.995c-.05-.05,3.4,0,3.4,0a3.952,3.952,0,0,1,3.548,4c.3,4.1-3.75,4-3.75,4" transform="translate(-69.155 -86.23)" fill="#2d1e0f"/>
                <path id="Path_70" data-name="Path 70" d="M181.982,143.683c-.065-4.4-5.331-4.363-5.331-4.363h-6.6c.05-.05-.034,17.224-.034,17.224h2.465v-7.995h4.6c5.4-1.17,4.9-4.866,4.9-4.866m-2.629.351a3.7,3.7,0,0,1-3.7,3.948h-3.247v-8.12c-.027-.027,2.824-.027,2.824-.027,4.569.377,4.119,4.2,4.119,4.2" transform="translate(-105.233 -86.23)" fill="#2d1e0f"/>
              </g>
            </svg>
        </a> 
    </div>
    <div class="menu-m">
        <div class="menu-flex">
            <?php wp_nav_menu( array( 'theme_location' => 'product-menu' ) ); ?>  
        </div>
    </div>
</div>
<div class="reset_imagen_background" style="background-image:url(<?php echo site_url();?>/wp-content/uploads/2020/01/foto-menu.png);" data="<?php echo site_url();?>/wp-content/uploads/2020/01/foto-menu.png"></div>
<div class="reset_close"></div>