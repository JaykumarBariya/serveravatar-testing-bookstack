<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Neseniai sukurtas',
    'recently_created_pages' => 'Neseniai sukurti puslapiai',
    'recently_updated_pages' => 'Neseniai atnaujinti puslapiai',
    'recently_created_chapters' => 'Neseniai sukurti skyriai',
    'recently_created_books' => 'Neseniai sukurtos knygos',
    'recently_created_shelves' => 'Neseniai sukurtos lentynos',
    'recently_update' => 'Neseniai atnaujinta',
    'recently_viewed' => 'Neseniai peržiūrėta',
    'recent_activity' => 'Paskutiniai veiksmai',
    'create_now' => 'Sukurti vieną dabar',
    'revisions' => 'Pataisymai',
    'meta_revision' => 'Pataisymas #:revisionCount',
    'meta_created' => 'Sukurta :timeLength',
    'meta_created_name' => 'Sukurta :timeLength naudotojo :user',
    'meta_updated' => 'Atnaujintas :timeLength',
    'meta_updated_name' => 'Atnaujinta :timeLength naudotojo :user',
    'meta_owned_name' => 'Priklauso :user',
    'meta_reference_count' => 'Referenced by :count item|Referenced by :count items',
    'entity_select' => 'Pasirinkti subjektą',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Nuotraukos',
    'my_recent_drafts' => 'Naujausi išsaugoti juodraščiai',
    'my_recently_viewed' => 'Neseniai peržiūrėti',
    'my_most_viewed_favourites' => 'My Most Viewed Favourites',
    'my_favourites' => 'Mėgstamiausi',
    'no_pages_viewed' => 'Jūs neperžiūrėjote nei vieno puslapio',
    'no_pages_recently_created' => 'Nebuvos sukurta jokių puslapių',
    'no_pages_recently_updated' => 'Nebuvo atnaujinta jokių puslapių',
    'export' => 'Eksportuoti',
    'export_html' => 'Sudėtinis žiniatinklio failas',
    'export_pdf' => 'PDF failas',
    'export_text' => 'Paprastas failo tekstas',
    'export_md' => 'Markdown File',
    'export_zip' => 'Portable ZIP',
    'default_template' => 'Default Page Template',
    'default_template_explain' => 'Assign a page template that will be used as the default content for all pages created within this item. Keep in mind this will only be used if the page creator has view access to the chosen template page.',
    'default_template_select' => 'Select a template page',
    'import' => 'Import',
    'import_validate' => 'Validate Import',
    'import_desc' => 'Import books, chapters & pages using a portable zip export from the same, or a different, instance. Select a ZIP file to proceed. After the file has been uploaded and validated you\'ll be able to configure & confirm the import in the next view.',
    'import_zip_select' => 'Select ZIP file to upload',
    'import_zip_validation_errors' => 'Errors were detected while validating the provided ZIP file:',
    'import_pending' => 'Pending Imports',
    'import_pending_none' => 'No imports have been started.',
    'import_continue' => 'Continue Import',
    'import_continue_desc' => 'Review the content due to be imported from the uploaded ZIP file. When ready, run the import to add its contents to this system. The uploaded ZIP import file will be automatically removed on successful import.',
    'import_details' => 'Import Details',
    'import_run' => 'Run Import',
    'import_size' => ':size Import ZIP Size',
    'import_uploaded_at' => 'Uploaded :relativeTime',
    'import_uploaded_by' => 'Uploaded by',
    'import_location' => 'Import Location',
    'import_location_desc' => 'Select a target location for your imported content. You\'ll need the relevant permissions to create within the location you choose.',
    'import_delete_confirm' => 'Are you sure you want to delete this import?',
    'import_delete_desc' => 'This will delete the uploaded import ZIP file, and cannot be undone.',
    'import_errors' => 'Import Errors',
    'import_errors_desc' => 'The follow errors occurred during the import attempt:',

    // Permissions and restrictions
    'permissions' => 'Leidimai',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Išsaugoti leidimus',
    'permissions_owner' => 'Savininkas',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => 'Ieškoti rezultatų',
    'search_total_results_found' => ':count rastas rezultatas|:count iš viso rezultatų rasta',
    'search_clear' => 'Išvalyti paiešką',
    'search_no_pages' => 'Nėra puslapių pagal šią paiešką',
    'search_for_term' => 'Ieškoti pagal :term',
    'search_more' => 'Daugiau rezultatų',
    'search_advanced' => 'Išplėstinė paieška',
    'search_terms' => 'Ieškoti terminų',
    'search_content_type' => 'Turinio tipas',
    'search_exact_matches' => 'Tikslūs atitikmenys',
    'search_tags' => 'Žymių paieškos',
    'search_options' => 'Parinktys',
    'search_viewed_by_me' => 'Mano peržiūrėta',
    'search_not_viewed_by_me' => 'Mano neperžiūrėta',
    'search_permissions_set' => 'Nustatyti leidimus',
    'search_created_by_me' => 'Mano sukurta',
    'search_updated_by_me' => 'Mano atnaujinimas',
    'search_owned_by_me' => 'Priklauso man',
    'search_date_options' => 'Datos parinktys',
    'search_updated_before' => 'Atnaujinta prieš',
    'search_updated_after' => 'Atnaujinta po',
    'search_created_before' => 'Sukurta prieš',
    'search_created_after' => 'Sukurta po',
    'search_set_date' => 'Nustatyti datą',
    'search_update' => 'Atnaujinti paiešką',

    // Shelves
    'shelf' => 'Lentyna',
    'shelves' => 'Lentynos',
    'x_shelves' => ':count lentyna|:count lentynos',
    'shelves_empty' => 'Nebuvo sukurtos jokios lentynos',
    'shelves_create' => 'Sukurti naują lentyną',
    'shelves_popular' => 'Populiarios lentynos',
    'shelves_new' => 'Naujos lentynos',
    'shelves_new_action' => 'Nauja lentyna',
    'shelves_popular_empty' => 'Populiariausios knygos pasirodys čia.',
    'shelves_new_empty' => 'Visai neseniai sukurtos lentynos pasirodys čia.',
    'shelves_save' => 'Išsaugoti lenyną',
    'shelves_books' => 'Knygos šioje lentynoje',
    'shelves_add_books' => 'Pridėti knygas į šią lentyną',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Ši lentyną neturi jokių pridėtų knygų',
    'shelves_edit_and_assign' => 'Redaguoti lentyną, kad pridėti knygų',
    'shelves_edit_named' => 'Edit Shelf :name',
    'shelves_edit' => 'Edit Shelf',
    'shelves_delete' => 'Delete Shelf',
    'shelves_delete_named' => 'Delete Shelf :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Shelf Permissions',
    'shelves_permissions_updated' => 'Shelf Permissions Updated',
    'shelves_permissions_active' => 'Shelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on shelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_permissions_create' => 'Shelf create permissions are only used for copying permissions to child books using the action below. They do not control the ability to create books.',
    'shelves_copy_permissions_to_books' => 'Kopijuoti leidimus knygoms',
    'shelves_copy_permissions' => 'Kopijuoti leidimus',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Knyga',
    'books' => 'Knygos',
    'x_books' => ':count knyga|:count knygos',
    'books_empty' => 'Nebuvo sukurta jokių knygų',
    'books_popular' => 'Populiarios knygos',
    'books_recent' => 'Naujos knygos',
    'books_new' => 'Naujos knygos',
    'books_new_action' => 'Nauja knyga',
    'books_popular_empty' => 'Čia pasirodys pačios populiariausios knygos.',
    'books_new_empty' => 'Čia pasirodys naujausios sukurtos knygos',
    'books_create' => 'Sukurti naują knygą',
    'books_delete' => 'Ištrinti knygą',
    'books_delete_named' => 'Ištrinti knygą :bookName',
    'books_delete_explain' => 'Tai ištrins knygą su pavadinimu \':bookName\'. Visi puslapiai ir skyriai bus pašalinti.',
    'books_delete_confirmation' => 'Ar jūs esate tikri, kad norite ištrinti šią knygą?',
    'books_edit' => 'Redaguoti knygą',
    'books_edit_named' => 'Redaguoti knygą :bookName',
    'books_form_book_name' => 'Knygos pavadinimas',
    'books_save' => 'Išsaugoti knygą',
    'books_permissions' => 'Knygos leidimas',
    'books_permissions_updated' => 'Knygos leidimas atnaujintas',
    'books_empty_contents' => 'Jokių puslapių ar skyrių nebuvo skurta šiai knygai',
    'books_empty_create_page' => 'Sukurti naują puslapį',
    'books_empty_sort_current_book' => 'Rūšiuoti dabartinę knygą',
    'books_empty_add_chapter' => 'Pridėti skyrių',
    'books_permissions_active' => 'Knygos leidimas aktyvus',
    'books_search_this' => 'Ieškoti šioje knygoje',
    'books_navigation' => 'Knygos naršymas',
    'books_sort' => 'Rūšiuoti pagal knygos turinį',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books. Optionally an auto sort rule can be set to automatically sort this book\'s contents upon changes.',
    'books_sort_auto_sort' => 'Auto Sort Option',
    'books_sort_auto_sort_active' => 'Auto Sort Active: :sortName',
    'books_sort_named' => 'Rūšiuoti knygą :bookName',
    'books_sort_name' => 'Rūšiuoti pagal vardą',
    'books_sort_created' => 'Rūšiuoti pagal sukūrimo datą',
    'books_sort_updated' => 'Rūšiuoti pagal atnaujinimo datą',
    'books_sort_chapters_first' => 'Skyriaus pradžia',
    'books_sort_chapters_last' => 'Skyriaus pabaiga',
    'books_sort_show_other' => 'Rodyti kitas knygas',
    'books_sort_save' => 'Išsaugoti naują įsakymą',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Move Up',
    'books_sort_move_down' => 'Move Down',
    'books_sort_move_prev_book' => 'Move to Previous Book',
    'books_sort_move_next_book' => 'Move to Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move to Start of Book',
    'books_sort_move_book_end' => 'Move to End of Book',
    'books_sort_move_before_chapter' => 'Move to Before Chapter',
    'books_sort_move_after_chapter' => 'Move to After Chapter',
    'books_copy' => 'Copy Book',
    'books_copy_success' => 'Book successfully copied',

    // Chapters
    'chapter' => 'Skyrius',
    'chapters' => 'Skyriai',
    'x_chapters' => ':count skyrius|:count skyriai',
    'chapters_popular' => 'Populiarūs skyriai',
    'chapters_new' => 'Naujas skyrius',
    'chapters_create' => 'Sukurti naują skyrių',
    'chapters_delete' => 'Ištrinti skyrių',
    'chapters_delete_named' => 'Ištrinti skyrių :chapterName',
    'chapters_delete_explain' => 'Tai ištrins skyrių su pavadinimu \':chapterName\. Visi puslapiai, esantys šiame skyriuje, taip pat bus ištrinti.',
    'chapters_delete_confirm' => 'Ar esate tikri, jog norite ištrinti šį skyrių?',
    'chapters_edit' => 'Redaguoti skyrių',
    'chapters_edit_named' => 'Redaguoti skyrių :chapterName',
    'chapters_save' => 'Išsaugoti skyrių',
    'chapters_move' => 'Perkelti skyrių',
    'chapters_move_named' => 'Perkelti skyrių :chapterName',
    'chapters_copy' => 'Copy Chapter',
    'chapters_copy_success' => 'Chapter successfully copied',
    'chapters_permissions' => 'Skyriaus leidimai',
    'chapters_empty' => 'Šiuo metu skyriuje nėra puslapių',
    'chapters_permissions_active' => 'Skyriaus leidimai aktyvūs',
    'chapters_permissions_success' => 'Skyriaus leidimai atnaujinti',
    'chapters_search_this' => 'Ieškoti šio skyriaus',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'Puslapis',
    'pages' => 'Puslapiai',
    'x_pages' => ':count puslapis|:count puslapiai',
    'pages_popular' => 'Populiarūs puslapiai',
    'pages_new' => 'Naujas puslapis',
    'pages_attachments' => 'Priedai',
    'pages_navigation' => 'Puslapių navigacija',
    'pages_delete' => 'Ištrinti puslapį',
    'pages_delete_named' => 'Ištrinti puslapį :pageName',
    'pages_delete_draft_named' => 'Ištrinti juodraščio puslapį :pageName',
    'pages_delete_draft' => 'Ištrinti juodraščio puslapį',
    'pages_delete_success' => 'Puslapis ištrintas',
    'pages_delete_draft_success' => 'Juodraščio puslapis ištrintas',
    'pages_delete_warning_template' => 'This page is in active use as a book or chapter default page template. These books or chapters will no longer have a default page template assigned after this page is deleted.',
    'pages_delete_confirm' => 'Ar esate tikri, kad norite ištrinti šį puslapį?',
    'pages_delete_draft_confirm' => 'Ar esate tikri, kad norite ištrinti šį juodraščio puslapį?',
    'pages_editing_named' => 'Redaguojamas puslapis :pageName',
    'pages_edit_draft_options' => 'Juodrasčio pasirinkimai',
    'pages_edit_save_draft' => 'Išsaugoti juodraštį',
    'pages_edit_draft' => 'Redaguoti juodraščio puslapį',
    'pages_editing_draft' => 'Redaguojamas juodraštis',
    'pages_editing_page' => 'Redaguojamas puslapis',
    'pages_edit_draft_save_at' => 'Juodraštis išsaugotas',
    'pages_edit_delete_draft' => 'Ištrinti juodraštį',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => 'Išmesti juodraštį',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_switch_to_new_wysiwyg' => 'Switch to new WYSIWYG',
    'pages_edit_switch_to_new_wysiwyg_desc' => '(In Alpha Testing)',
    'pages_edit_set_changelog' => 'Nustatyti keitimo žurnalą',
    'pages_edit_enter_changelog_desc' => 'Įveskite trumpus, jūsų atliktus, pokyčių aprašymus',
    'pages_edit_enter_changelog' => 'Įeiti į keitimo žurnalą',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Išsaugoti puslapį',
    'pages_title' => 'Puslapio antraštė',
    'pages_name' => 'Puslapio pavadinimas',
    'pages_md_editor' => 'Redaguotojas',
    'pages_md_preview' => 'Peržiūra',
    'pages_md_insert_image' => 'Įterpti nuotrauką',
    'pages_md_insert_link' => 'Įterpti subjekto nuorodą',
    'pages_md_insert_drawing' => 'Įterpti piešinį',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'Puslapio nėra skyriuje',
    'pages_move' => 'Perkelti puslapį',
    'pages_copy' => 'Nukopijuoti puslapį',
    'pages_copy_desination' => 'Nukopijuoti tikslą',
    'pages_copy_success' => 'Puslapis sėkmingai nukopijuotas',
    'pages_permissions' => 'Puslapio leidimai',
    'pages_permissions_success' => 'Puslapio leidimai atnaujinti',
    'pages_revision' => 'Peržiūra',
    'pages_revisions' => 'Puslapio peržiūros',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'Peržiūros puslapio :pageName',
    'pages_revision_named' => 'Peržiūra puslapio :pageName',
    'pages_revision_restored_from' => 'Atkurta iš #:id; :summary',
    'pages_revisions_created_by' => 'Sukurta',
    'pages_revisions_date' => 'Peržiūros data',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Peržiūra #:id',
    'pages_revisions_numbered_changes' => 'Peržiūros #:id pokyčiai',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Keitimo žurnalas',
    'pages_revisions_changes' => 'Pakeitimai',
    'pages_revisions_current' => 'Dabartinė versija',
    'pages_revisions_preview' => 'Peržiūra',
    'pages_revisions_restore' => 'Atkurti',
    'pages_revisions_none' => 'Šis puslapis neturi peržiūrų',
    'pages_copy_link' => 'Kopijuoti nuorodą',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'Puslapio leidimai aktyvūs',
    'pages_initial_revision' => 'Pradinis skelbimas',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'Naujas puslapis',
    'pages_editing_draft_notification' => 'Dabar jūs redaguojate juodraštį, kuris paskutinį kartą buvo išsaugotas :timeDiff',
    'pages_draft_edited_notification' => 'Šis puslapis buvo redaguotas iki to laiko. Rekomenduojame jums išmesti šį juodraštį.',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count naudotojai pradėjo redaguoti šį puslapį',
        'start_b' => ':userName pradėjo redaguoti šį puslapį',
        'time_a' => 'nuo puslapio paskutinio atnaujinimo',
        'time_b' => 'paskutinėmis :minCount minutėmis',
        'message' => ':start :time. Pasistenkite neperrašyti vienas kito atnaujinimų!',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => 'Specifinis puslapis',
    'pages_is_template' => 'Puslapio šablonas',

    // Editor Sidebar
    'toggle_sidebar' => 'Toggle Sidebar',
    'page_tags' => 'Puslapio žymos',
    'chapter_tags' => 'Skyriaus žymos',
    'book_tags' => 'Knygos žymos',
    'shelf_tags' => 'Lentynų žymos',
    'tag' => 'Žymos',
    'tags' =>  'Žymės',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Žymės pavadinimas',
    'tag_value' => 'Žymos vertė (neprivaloma)',
    'tags_explain' => "Add some tags to better categorise your content. \n You can assign a value to a tag for more in-depth organisation.",
    'tags_add' => 'Pridėti kitą žymą',
    'tags_remove' => 'Pridėti kitą žymą',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'Visos reikšmės',
    'tags_view_tags' => 'Peržiūrėti žymes',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Priedai',
    'attachments_explain' => 'Įkelkite kelis failus arba pridėkite nuorodas savo puslapyje. Jie matomi puslapio šoninėje juostoje.',
    'attachments_explain_instant_save' => 'Pakeitimai čia yra išsaugomi akimirksniu.',
    'attachments_upload' => 'Įkelti failą',
    'attachments_link' => 'Pridėti nuorodą',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'Nustatyti nuorodą',
    'attachments_delete' => 'Ar esate tikri, kad norite ištrinti šį priedą?',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => 'Failai nebuvo įkelti',
    'attachments_explain_link' => 'Jūs galite pridėti nuorodas, jei nenorite įkelti failo. Tai gali būti nuoroda į kitą puslapį arba nuoroda į failą debesyje.',
    'attachments_link_name' => 'Nuorodos pavadinimas',
    'attachment_link' => 'Priedo nuoroda',
    'attachments_link_url' => 'Nuoroda į failą',
    'attachments_link_url_hint' => 'URL į failą',
    'attach' => 'Pridėti',
    'attachments_insert_link' => 'Pridėti priedo nuorodą į puslapį',
    'attachments_edit_file' => 'Redaguoti failą',
    'attachments_edit_file_name' => 'Failo pavadinimas',
    'attachments_edit_drop_upload' => 'Numesti failus arba spausti čia ir atsisiųsti ir perrašyti',
    'attachments_order_updated' => 'Atnaujintas priedų išsidėstymas',
    'attachments_updated_success' => 'Priedų detalės atnaujintos',
    'attachments_deleted' => 'Priedas ištrintas',
    'attachments_file_uploaded' => 'Failas sėkmingai įkeltas',
    'attachments_file_updated' => 'Failas sėkmingai atnaujintas',
    'attachments_link_attached' => 'Nuoroda sėkmingai pridėta puslapyje',
    'templates' => 'Šablonai',
    'templates_set_as_template' => 'Puslapis yra šablonas',
    'templates_explain_set_as_template' => 'Jūs galite nustatyti šį puslapį kaip šabloną, jo turinys bus panaudotas, kuriant kitus puslapius. Kiti naudotojai galės naudotis šiuo šablonu, jei turės peržiūros leidimą šiam puslapiui.',
    'templates_replace_content' => 'Pakeisti puslapio turinį',
    'templates_append_content' => 'Papildyti puslapio turinį',
    'templates_prepend_content' => 'Priklauso nuo puslapio turinio',

    // Profile View
    'profile_user_for_x' => 'Naudotojas :time',
    'profile_created_content' => 'Sukurtas tyrinys',
    'profile_not_created_pages' => ':userName nesukūrė jokio puslapio',
    'profile_not_created_chapters' => ':userName nesukūrė jokio skyriaus',
    'profile_not_created_books' => ':userName nesukūrė jokios knygos',
    'profile_not_created_shelves' => ':userName nesukūrė jokių lentynų',

    // Comments
    'comment' => 'Komentaras',
    'comments' => 'Komentarai',
    'comment_add' => 'Pridėti komentarą',
    'comment_placeholder' => 'Palikite komentarą čia',
    'comment_count' => '{0} Nėra komentarų|{1} 1 komentaras|[2,*] :count komentarai',
    'comment_save' => 'Išsaugoti komentarą',
    'comment_new' => 'Naujas komentaras',
    'comment_created' => 'Pakomentuota :createDiff',
    'comment_updated' => 'Atnaujinta :updateDiff pagal :username',
    'comment_updated_indicator' => 'Updated',
    'comment_deleted_success' => 'Komentaras ištrintas',
    'comment_created_success' => 'Komentaras pridėtas',
    'comment_updated_success' => 'Komentaras atnaujintas',
    'comment_delete_confirm' => 'Esate tikri, kad norite ištrinti šį komentarą?',
    'comment_in_reply_to' => 'Atsakydamas į :commentId',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => 'Esate tikri, kad norite ištrinti šią peržiūrą?',
    'revision_restore_confirm' => 'Esate tikri, kad norite atkurti šią peržiūrą? Dabartinis puslapio turinys bus pakeistas.',
    'revision_cannot_delete_latest' => 'Negalima išrinti vėliausios peržiūros',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Listed below is all the known content in the system that links to this item.',

    // Watch Options
    'watch' => 'Watch',
    'watch_title_default' => 'Default Preferences',
    'watch_desc_default' => 'Revert watching to just your default notification preferences.',
    'watch_title_ignore' => 'Ignore',
    'watch_desc_ignore' => 'Ignore all notifications, including those from user-level preferences.',
    'watch_title_new' => 'New Pages',
    'watch_desc_new' => 'Notify when any new page is created within this item.',
    'watch_title_updates' => 'All Page Updates',
    'watch_desc_updates' => 'Notify upon all new pages and page changes.',
    'watch_desc_updates_page' => 'Notify upon all page changes.',
    'watch_title_comments' => 'All Page Updates & Comments',
    'watch_desc_comments' => 'Notify upon all new pages, page changes and new comments.',
    'watch_desc_comments_page' => 'Notify upon page changes and new comments.',
    'watch_change_default' => 'Change default notification preferences',
    'watch_detail_ignore' => 'Ignoring notifications',
    'watch_detail_new' => 'Watching for new pages',
    'watch_detail_updates' => 'Watching new pages and updates',
    'watch_detail_comments' => 'Watching new pages, updates & comments',
    'watch_detail_parent_book' => 'Watching via parent book',
    'watch_detail_parent_book_ignore' => 'Ignoring via parent book',
    'watch_detail_parent_chapter' => 'Watching via parent chapter',
    'watch_detail_parent_chapter_ignore' => 'Ignoring via parent chapter',
];
