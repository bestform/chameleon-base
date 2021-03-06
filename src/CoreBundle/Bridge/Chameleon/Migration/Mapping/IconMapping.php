<?php
/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ChameleonSystem\CoreBundle\Bridge\Chameleon\Migration\Mapping;

class IconMapping
{
    public const ICON_MAPPING = [
        'accept.png' => 'fas fa-check-circle',
        'action_refresh.gif' => 'fas fa-sync',
        'action_save.gif' => 'far fa-save',
        'action_stop.gif' => 'fas fa-times-circle',
        'add.png' => 'fas fa-plus-circle',
        'angel.png' => 'fas fa-venus',
        'application.png' => 'fas fa-window-maximize',
        'application_cascade.png' => 'fas fa-clone',
        'application_form_magnify.png' => 'fab fa-searchengin',
        'application_form.png' => 'fas fa-list',
        'application_form_edit.png' => 'fas fa-newspaper',
        'application_get.png' => 'fas fa-upload',
        'application_go.png' => 'fas fa-external-link-square-alt',
        'application_lightning.png' => 'fas fa-searchengin',
        'application_split.png' => 'far fa-window-minimize',
        'application_side_expand.png' => 'fas fa-file-export',
        'application_side_list.png' => 'fas fa-boxes',
        'application_side_tree.png' => 'fas fa-cogs',
        'application_view_detail.png' => 'fas fa-truck',
        'application_view_list.png' => 'fas fa-boxes',
        'application_view_tile.png' => 'fas fa-clipboard-list',
        'arrow_divide.png' => 'fas fa-random',
        'arrow_in.png' => 'fas fa-compress-arrows-alt',
        'arrow_out.png' => 'far fa-arrow-alt-circle-right',
        'arrow_refresh.png' => 'fas fa-exchange-alt',
        'arrow_switch.png' => 'fas fa-random',
        'award_star_add.png' => 'fas fa-medal',
        'award_star_gold_3.png' => 'fas fa-medal',
        'basket_error.png' => 'fas fa-shopping-basket',
        'basket.png' => 'fas fa-tasks',
        'basket_go.png' => 'fas fa-shopping-cart',
        'book.png' => 'fas fa-book',
        'book_open.png' => 'fas fa-book-open',
        'books.png' => 'fas fa-book',
        'box-orange.png' => 'fas fa-gift',
        'brick_edit.png' => 'fas fa-file-alt',
        'brick.png' => 'fas fa-palette',
        'bricks.png' => 'fas fa-cubes',
        'bug_error.png' => 'fas fa-bug',
        'building_edit.png' => 'far fa-comments',
        'cake.png' => 'fas fa-birthday-cake',
        'calculator_edit.png' => 'far fa-object-ungroup',
        'cart_go.png' => 'fas fa-check-double',
        'chart_bar.png' => 'fas fa-chart-bar',
        'chart_curve_edit.png' => 'fas fa-chart-bar',
        'chart_curve_go.png' => 'fas fa-chart-line',
        'chart_organisation.png' => 'fas fa-bars',
        'chart_pie.png' => 'fas fa-chart-pie',
        'clock.png' => 'far fa-clock',
        'clock_add.png' => 'fas fa-business-time',
        'cog.png' => 'fas fa-truck-monster',
        'color_swatch.png' => 'fas fa-braille',
        'color_wheel.png' => 'fas fa-desktop',
        'comment.gif' => 'fas fa-comments',
        'comments.png' => 'fas fa-comment-dots',
        'comment_yellow.gif' => 'far fa-comment',
        'cut.gif' => 'fas fa-cut',
        'database_gear.png' => 'fas fa-filter',
        'database_go.png' => 'fas fa-file-export',
        'database_lightning.png' => 'fas fa-poo-storm',
        'database_link.png' => 'fas fa-search',
        'database_table.png' => 'fas fa-table',
        'date_go.png' => 'fas fa-eye',
        'de.png' => 'far fa-flag',
        'email_add.png' => 'fas fa-mail-bulk',
        'email_attach.png' => 'fas fa-paperclip',
        'email_edit.png' => 'fas fa-envelope',
        'email_go.png' => 'fas fa-user-edit',
        'email_link.png' => 'fas fa-at',
        'eye.png' => 'far fa-eye',
        'file_font_truetype.gif' => 'fas fa-fingerprint',
        'file_font.gif' => 'fas fa-font',
        'film.png' => 'fas fa-film',
        'flag_blue.png' => 'far fa-flag',
        'folder.png' => 'fas fa-folder',
        'folder_brick.png' => 'fas fa-shapes',
        'folder_edit.png' => 'fas fa-file-alt',
        'folder_explore.png' => 'fas fa-search',
        'folder_image.png' => 'fas fa-images',
        'folder_link.png' => 'fas fa-folder-open',
        'folder_star.png' => 'fas fa-gift',
        'folder_table.png' => 'fas fa-table',
        'folder_user.png' => 'fas fa-users',
        'gb.png' => 'fas fa-flag-usa',
        'group_gear.png' => 'fas fa-user-cog',
        'group.png' => 'fas fa-users',
        'group_go.png' => 'fas fa-user-friends',
        'group_key.png' => 'fas fa-user-friends',
        'hike.gif' => 'fas fa-hiking',
        'house.png' => 'fas fa-home',
        'icon_attachment.gif' => 'far fa-file',
        'icon_component.gif' => 'fas fa-th-large',
        'icon_email.gif' => 'fas fa-envelope-open-text',
        'icon_extension.gif' => 'fas fa-puzzle-piece',
        'icon_get_world.gif' => 'fas fa-download',
        'icon_history.gif' => 'fas fa-history',
        'icon_info.gif' => 'fas fa-info-circle',
        'icon_key.gif' => 'fas fa-key',
        'icon_package_get.gif' => 'fas fa-screwdriver',
        'icon_security.gif' => 'fas fa-users-cog',
        'icon_user.gif' => 'fas fa-user',
        'icon_world.gif' => 'fas fa-flag',
        'image.gif' => 'fas fa-image',
        'image_add.png' => 'far fa-file-image',
        'image_edit.png' => 'far fa-file-image',
        'images.png' => 'fab fa-usb',
        'interface_installer.gif' => 'fas fa-layer-group',
        'kcmdf.png' => 'fas fa-object-ungroup',
        'knewsticker.png' => 'fas fa-bullhorn',
        'layout_content.png' => 'fas fa-desktop',
        'layout.png' => 'fas fa-haykal',
        'layout_header.png' => 'fas fa-object-group',
        'list_extensions.gif' => 'fas fa-clipboard-list',
        'list_users.gif' => 'far fa-address-book',
        'list_world.gif' => 'fas fa-globe-europe',
        'lorry.png' => 'far fa-money-bill-alt',
        'magnifier.png' => 'fas fa-search',
        'magnifier_zoom_in.png' => 'fas fa-search-plus',
        'map.png' => 'fas fa-map-marked',
        'map_magnify.png' => 'fas fa-map-marked-alt',
        'medal_gold_2.png' => 'fas fa-star',
        'medal_gold_3.png' => 'fas fa-star-half-alt',
        'money_add.png' => 'fas fa-money-check-alt',
        'money_dollar.png' => 'far fa-comment-alt-dollar',
        'money_euro.png' => 'fas fa-hand-holding-usd',
        'money.png' => 'fas fa-money-bill-wave',
        'monitor_edit.png' => 'fas fa-cog',
        'mountain.png' => 'fas fa-mountain',
        'news.png' => 'far fa-newspaper',
        'newspaper.png' => 'fas fa-user-check',
        'newspaper_delete.png' => 'fas fa-tasks',
        'office-document.png' => 'fas fa-file-alt',
        'ornament2-gold.png' => 'fas fa-birthday-cake',
        'package.png' => 'fas fa-truck-loading',
        'page_component.gif' => 'fas fa-cubes',
        'page_edit.png' => 'fas fa-clipboard-list',
        'page_html.gif' => 'fas fa-globe-americas',
        'page_navigation.gif' => 'fas fa-network-wired',
        'page_next.gif' => 'fas fa-file-export',
        'page_package.gif' => 'far fa-play-circle',
        'page_text.gif' => 'fas fa-terminal',
        'page_user.gif' => 'far fa-user',
        'page_white_find.png' => 'far fa-list-alt',
        'page_white_key.png' => 'fas fa-wrench',
        'page_white_text.png' => 'far fa-newspaper',
        'pencil.png' => 'fas fa-pen-square',
        'photo.png' => 'far fa-address-card',
        'photos.png' => 'far fa-images',
        'pictures.png' => 'far fa-address-card',
        'pilcrow.png' => 'fas fa-pencil-ruler',
        'prohibited.png' => 'fas fa-user-slash',
        'raining.png' => 'fas fa-cloud-showers-heavy',
        'report.png' => 'fas fa-clipboard-list',
        'resultset_next.png' => 'fas fa-play',
        'rosette.png' => 'fas fa-award',
        'server.png' => 'fas fa-store-alt',
        'sitemap_color.png' => 'fas fa-boxes',
        'status_busy.png' => 'fas fa-user-shield',
        'tag_blue_edit.png' => 'fas fa-tags',
        'text_dropcaps.png' => 'fas fa-font',
        'textfield.png' => 'fas fa-edit',
        'tick.png' => 'fas fa-clipboard-check',
        'thumbnail.png' => 'fas fa-images',
        'user_comment.png' => 'fas fa-user-edit',
        'user_female.png' => 'fas fa-user',
        'user_gray.png' => 'fas fa-user-tie',
        'user_orange.png' => 'far fa-user',
        'user.png' => 'fas fa-user',
        'user_suit.png' => 'fas fa-user-lock',
        'wand.png' => 'fas fa-magic',
        'weather_clouds.png' => 'fas fa-cloud',
        'world_edit.png' => 'fas fa-map-marked-alt',
        'world.png' => 'fas fa-home',
        'wrench.png' => 'fas fa-industry',
        'weather-few-clouds.png' => 'fas fa-cloud-sun',
        'weather_cloudy.png' => 'fas fa-cloud-sun',
        'weather_sun.png' => 'fas fa-sun',
        'weather_snow.png' => 'fas fa-snowflake',
        'world_go.png' => 'fas fa-file-import',
    ];
}
