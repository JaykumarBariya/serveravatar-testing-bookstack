<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => '最近建立',
    'recently_created_pages' => '最近建立的頁面',
    'recently_updated_pages' => '最近更新的頁面',
    'recently_created_chapters' => '最近建立的章節',
    'recently_created_books' => '最近建立的書本',
    'recently_created_shelves' => '最近建立的書架',
    'recently_update' => '最近更新',
    'recently_viewed' => '最近檢視',
    'recent_activity' => '近期活動',
    'create_now' => '立即建立',
    'revisions' => '修訂版本',
    'meta_revision' => '修訂版本 #:revisionCount',
    'meta_created' => '建立於 :timeLength',
    'meta_created_name' => '由 :user 建立於 :timeLength',
    'meta_updated' => '更新於 :timeLength',
    'meta_updated_name' => '由 :user 更新於 :timeLength',
    'meta_owned_name' => ':user 所擁有',
    'meta_reference_count' => '被 :count 個項目引用',
    'entity_select' => '選取項目',
    'entity_select_lack_permission' => '你沒有權限使用此項目',
    'images' => '圖片',
    'my_recent_drafts' => '我最近的草稿',
    'my_recently_viewed' => '我最近檢視',
    'my_most_viewed_favourites' => '我瀏覽最多次的最愛',
    'my_favourites' => '我的最愛',
    'no_pages_viewed' => '您尚未看過任何頁面',
    'no_pages_recently_created' => '最近未建立任何頁面',
    'no_pages_recently_updated' => '最近沒有頁面被更新',
    'export' => '匯出',
    'export_html' => '網頁檔案',
    'export_pdf' => 'PDF 檔案',
    'export_text' => '純文字檔案',
    'export_md' => 'Markdown 檔案',
    'export_zip' => '可攜式 ZIP',
    'default_template' => '預設頁面範本',
    'default_template_explain' => '請設定一個頁面範本，作為新頁面的預設內容。請注意，這僅限於作者擁有頁面範本讀取權限時才能夠使用。',
    'default_template_select' => '選擇一個頁面範本',
    'import' => '匯入',
    'import_validate' => '驗證匯入',
    'import_desc' => '使用從相同或不同站點匯出的可攜式壓縮檔匯入書本、章節與頁面。選取 ZIP 檔案繼續。檔案上傳並通過驗證後，您就可以在下一個檢視中設定並確認匯入。',
    'import_zip_select' => '選取要上傳的 ZIP 檔案',
    'import_zip_validation_errors' => '驗證提供的 ZIP 檔案時偵測到錯誤：',
    'import_pending' => '擱置中的匯入',
    'import_pending_none' => '尚未開始匯入。',
    'import_continue' => '繼續匯入',
    'import_continue_desc' => '檢視要從上傳的 ZIP 檔匯入的內容。準備就緒後，執行匯入以將其內容加入本系統。成功匯入後，上傳的 ZIP 匯入檔案會自動移除。',
    'import_details' => '匯入詳細資訊',
    'import_run' => '執行匯入',
    'import_size' => ':size 匯入 ZIP 大小',
    'import_uploaded_at' => ':relativeTime 已上傳',
    'import_uploaded_by' => '上傳者',
    'import_location' => '匯入位置',
    'import_location_desc' => '為您匯入的內容選取目標位置。您需要相關權限才能在您選擇的位置內建立。',
    'import_delete_confirm' => '您確定要刪除此匯入嗎？',
    'import_delete_desc' => '這將會刪除已上傳的匯入 ZIP 檔案，且無法還原。',
    'import_errors' => '匯入錯誤',
    'import_errors_desc' => '嘗試匯入時發生以下錯誤：',

    // Permissions and restrictions
    'permissions' => '權限',
    'permissions_desc' => '設定權限，並覆蓋角色預設權限',
    'permissions_book_cascade' => '除非章節、頁面有自訂權限，否則書籍設定的權限將自動套用',
    'permissions_chapter_cascade' => '除非章節、頁面有自訂權限，否則章節的權限將自動套用',
    'permissions_save' => '儲存權限',
    'permissions_owner' => '擁有者',
    'permissions_role_everyone_else' => '所有其他人',
    'permissions_role_everyone_else_desc' => '設定未被指派角色時的權限',
    'permissions_role_override' => '覆蓋角色權限',
    'permissions_inherit_defaults' => '繼承預設值',

    // Search
    'search_results' => '搜尋結果',
    'search_total_results_found' => '找到了 :count 個結果 | 總共 :count 個結果',
    'search_clear' => '清除搜尋',
    'search_no_pages' => '沒有與此搜尋相符的頁面',
    'search_for_term' => ':term 的搜尋結果',
    'search_more' => '更多結果',
    'search_advanced' => '進階搜尋',
    'search_terms' => '搜尋字串',
    'search_content_type' => '內容類型',
    'search_exact_matches' => '精確符合',
    'search_tags' => '標籤搜尋',
    'search_options' => '選項',
    'search_viewed_by_me' => '被我檢視',
    'search_not_viewed_by_me' => '未被我檢視',
    'search_permissions_set' => '權限設定',
    'search_created_by_me' => '我建立的',
    'search_updated_by_me' => '我更新的',
    'search_owned_by_me' => '我所擁有的',
    'search_date_options' => '日期選項',
    'search_updated_before' => '在此之前更新',
    'search_updated_after' => '在此之後更新',
    'search_created_before' => '在此之前建立',
    'search_created_after' => '在此之後建立',
    'search_set_date' => '設定日期',
    'search_update' => '更新搜尋結果',

    // Shelves
    'shelf' => '書架',
    'shelves' => '書架',
    'x_shelves' => ':count 書架 | :count 章節',
    'shelves_empty' => '尚未建立書架',
    'shelves_create' => '建立新書架',
    'shelves_popular' => '熱門書架',
    'shelves_new' => '新書架',
    'shelves_new_action' => '建立新的書架',
    'shelves_popular_empty' => '最受歡迎的書架將出現在這裡。',
    'shelves_new_empty' => '最近建立的書架將出現在這裡。',
    'shelves_save' => '儲存書架',
    'shelves_books' => '此書架上的書本',
    'shelves_add_books' => '新增書本至此書架',
    'shelves_drag_books' => '拖曳書籍至下方，以便新增至此書架',
    'shelves_empty_contents' => '此書架沒有分配任何書本',
    'shelves_edit_and_assign' => '編輯書架以分配書本',
    'shelves_edit_named' => '編輯書架',
    'shelves_edit' => '編輯書架',
    'shelves_delete' => '刪除書架',
    'shelves_delete_named' => '刪除書架「:name」',
    'shelves_delete_explain' => "這將刪除名為「:name」的書架。但其中的書本不會被刪除。",
    'shelves_delete_confirmation' => '您確定要刪除此書架嗎？',
    'shelves_permissions' => '書架權限',
    'shelves_permissions_updated' => '已更新書架權限',
    'shelves_permissions_active' => '已啟用書架權限',
    'shelves_permissions_cascade_warning' => '因書籍可位於多個書架，因此書架權限不會自動套用至書籍上。但仍可透過下方的選項來複製權限到子書籍。',
    'shelves_permissions_create' => '書架創建權限僅用於使用下面的操作將權限複製到子圖書。這個權限不是用來控制創建書籍的。',
    'shelves_copy_permissions_to_books' => '將權限複製到書本',
    'shelves_copy_permissions' => '複製權限',
    'shelves_copy_permissions_explain' => '此操作會將此書架的當前權限設置應用於其中包含的所有圖書上。 啓用前請確保已保存對此書架權限的任何更改。',
    'shelves_copy_permission_success' => '書架權限已複製到 :count 本書籍',

    // Books
    'book' => '書本',
    'books' => '書本',
    'x_books' => ':count 本書 | :count本書',
    'books_empty' => '不存在已建立的書',
    'books_popular' => '熱門書本',
    'books_recent' => '近期書本',
    'books_new' => '新書本',
    'books_new_action' => '新書本',
    'books_popular_empty' => '最受歡迎的書本將出現在這裡。',
    'books_new_empty' => '最近建立的書本將出現在這裡。',
    'books_create' => '建立新書本',
    'books_delete' => '刪除書本',
    'books_delete_named' => '刪除書本 :bookName',
    'books_delete_explain' => '這將刪除書本「:bookName」。所有的章節和頁面都會被刪除。',
    'books_delete_confirmation' => '您確定要刪除此書本嗎？',
    'books_edit' => '編輯書本',
    'books_edit_named' => '編輯書本「:bookName」',
    'books_form_book_name' => '書本名稱',
    'books_save' => '儲存書本',
    'books_permissions' => '書本權限',
    'books_permissions_updated' => '書本權限已更新',
    'books_empty_contents' => '本書目前沒有頁面或章節。',
    'books_empty_create_page' => '建立新頁面',
    'books_empty_sort_current_book' => '排序目前書本',
    'books_empty_add_chapter' => '新增章節',
    'books_permissions_active' => '書本權限已啟用',
    'books_search_this' => '搜尋此書本',
    'books_navigation' => '書本導覽',
    'books_sort' => '排序書本內容',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books. Optionally an auto sort rule can be set to automatically sort this book\'s contents upon changes.',
    'books_sort_auto_sort' => 'Auto Sort Option',
    'books_sort_auto_sort_active' => 'Auto Sort Active: :sortName',
    'books_sort_named' => '排序書本 :bookName',
    'books_sort_name' => '按名稱排序',
    'books_sort_created' => '按建立時間排序',
    'books_sort_updated' => '按更新時間排序',
    'books_sort_chapters_first' => '第一章',
    'books_sort_chapters_last' => '最後一章',
    'books_sort_show_other' => '顯示其他書本',
    'books_sort_save' => '儲存新順序',
    'books_sort_show_other_desc' => '新增書籍到排序清單中，以便跨書籍重組資料',
    'books_sort_move_up' => '上移',
    'books_sort_move_down' => '下移',
    'books_sort_move_prev_book' => '移動至前一書籍',
    'books_sort_move_next_book' => '移動至前一書籍',
    'books_sort_move_prev_chapter' => '移動至前一章節',
    'books_sort_move_next_chapter' => '移動至下一章節',
    'books_sort_move_book_start' => '移動到書籍開頭',
    'books_sort_move_book_end' => '移動到書籍結尾',
    'books_sort_move_before_chapter' => '移動到章節之前',
    'books_sort_move_after_chapter' => '移動到章節之後',
    'books_copy' => '複製書籍',
    'books_copy_success' => '書籍已成功被複製',

    // Chapters
    'chapter' => '章節',
    'chapters' => '章節',
    'x_chapters' => ':count個章節 | :count個章節',
    'chapters_popular' => '熱門章節',
    'chapters_new' => '新章節',
    'chapters_create' => '建立章節',
    'chapters_delete' => '刪除章節',
    'chapters_delete_named' => '刪除章節 :chapterName',
    'chapters_delete_explain' => '這將會刪除名稱為「:chapterName」的章節。此章節中的所有頁面都將會被刪除。',
    'chapters_delete_confirm' => '您確定要刪除此章節嗎？',
    'chapters_edit' => '編輯章節',
    'chapters_edit_named' => '編輯章節「:chapterName」',
    'chapters_save' => '儲存章節',
    'chapters_move' => '移動章節',
    'chapters_move_named' => '移動章節 :chapterName',
    'chapters_copy' => '複製章節',
    'chapters_copy_success' => '章節已成功被複製',
    'chapters_permissions' => '章節權限',
    'chapters_empty' => '本章目前沒有頁面。',
    'chapters_permissions_active' => '章節權限已啟用',
    'chapters_permissions_success' => '章節權限已更新',
    'chapters_search_this' => '搜尋此章節',
    'chapter_sort_book' => '排序書籍內容',

    // Pages
    'page' => '頁面',
    'pages' => '頁面',
    'x_pages' => ':count 頁 | :count 頁',
    'pages_popular' => '熱門頁面',
    'pages_new' => '新頁面',
    'pages_attachments' => '附件',
    'pages_navigation' => '頁面導覽',
    'pages_delete' => '刪除頁面',
    'pages_delete_named' => '刪除頁面 :pageName',
    'pages_delete_draft_named' => '刪除草稿頁面 :pageName',
    'pages_delete_draft' => '刪除草稿頁面',
    'pages_delete_success' => '頁面已刪除',
    'pages_delete_draft_success' => '草稿頁面已刪除',
    'pages_delete_warning_template' => '此頁面是當前書籍或章節的默認頁面模板。刪除此頁面後，這些書籍或章節的默認頁面模板將被取消。',
    'pages_delete_confirm' => '您確定要刪除此頁面嗎？',
    'pages_delete_draft_confirm' => '您確定要刪除此草稿頁面嗎？',
    'pages_editing_named' => '正在編輯頁面 :pageName',
    'pages_edit_draft_options' => '草稿選項',
    'pages_edit_save_draft' => '儲存草稿',
    'pages_edit_draft' => '編輯頁面草稿',
    'pages_editing_draft' => '正在編輯草稿',
    'pages_editing_page' => '正在編輯頁面',
    'pages_edit_draft_save_at' => '草稿儲存於 ',
    'pages_edit_delete_draft' => '刪除草稿',
    'pages_edit_delete_draft_confirm' => '您確定要刪除您的草稿頁面更改嗎？自上次完整保存以來的所有更改都將丟失，編輯器將更新為最新非草稿頁面。',
    'pages_edit_discard_draft' => '放棄草稿',
    'pages_edit_switch_to_markdown' => '切換到 Markdown 編輯器',
    'pages_edit_switch_to_markdown_clean' => '(清除內容)',
    'pages_edit_switch_to_markdown_stable' => '(保留內容)',
    'pages_edit_switch_to_wysiwyg' => '切換到所見即所得編輯器',
    'pages_edit_switch_to_new_wysiwyg' => '切換為新的所見即所得編輯器',
    'pages_edit_switch_to_new_wysiwyg_desc' => '（仍在開發測試階段）',
    'pages_edit_set_changelog' => '設定變更日誌',
    'pages_edit_enter_changelog_desc' => '輸入對您所做變動的簡易描述',
    'pages_edit_enter_changelog' => '輸入變更日誌',
    'pages_editor_switch_title' => '切換編輯器',
    'pages_editor_switch_are_you_sure' => '你想要更改這頁所使用的編輯器嗎？',
    'pages_editor_switch_consider_following' => '更換編輯器時請考慮以下事項：',
    'pages_editor_switch_consideration_a' => '一旦選擇使用新的編輯器，其他頁面以及沒有權限更換編輯器的使用者都將使用新的編輯器',
    'pages_editor_switch_consideration_b' => '在某些情況下，將遺失細部設定以及語法',
    'pages_editor_switch_consideration_c' => '切換編輯器時，本次的標籤設定、版本修訂記錄將不會被保留',
    'pages_save' => '儲存頁面',
    'pages_title' => '頁面標題',
    'pages_name' => '頁面名稱',
    'pages_md_editor' => '編輯者',
    'pages_md_preview' => '預覽',
    'pages_md_insert_image' => '插入圖片',
    'pages_md_insert_link' => '插入連結',
    'pages_md_insert_drawing' => '插入繪圖',
    'pages_md_show_preview' => '顯示預覽',
    'pages_md_sync_scroll' => '預覽頁面同步捲動',
    'pages_drawing_unsaved' => '偵測到未儲存的繪圖',
    'pages_drawing_unsaved_confirm' => '從之前保存失敗的繪圖中發現了可恢復的數據。您想恢復並繼續編輯這個未保存的繪圖嗎？',
    'pages_not_in_chapter' => '頁面不在章節中',
    'pages_move' => '移動頁面',
    'pages_copy' => '複製頁面',
    'pages_copy_desination' => '複製的目的地',
    'pages_copy_success' => '頁面已成功複製',
    'pages_permissions' => '頁面權限',
    'pages_permissions_success' => '頁面權限已更新',
    'pages_revision' => '修訂版本',
    'pages_revisions' => '頁面修訂版本',
    'pages_revisions_desc' => '下面列出的是該頁面的所有過去修訂。如果權限允許，您可以回顧、比較和恢復舊的頁面版本。頁面的完整歷史可能不會在這裡完全反映出來，因為根據系統配置，舊的修訂可能會被自動刪除。',
    'pages_revisions_named' => ':pageName 頁面修訂版本',
    'pages_revision_named' => ':pageName 頁面修訂版本',
    'pages_revision_restored_from' => '從 #:id; :summary 復原',
    'pages_revisions_created_by' => '建立者',
    'pages_revisions_date' => '修訂日期',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => '修訂版號',
    'pages_revisions_numbered' => '修訂版本 #:id',
    'pages_revisions_numbered_changes' => '修訂版本 #:id 變更',
    'pages_revisions_editor' => '編輯器類型',
    'pages_revisions_changelog' => '變動日誌',
    'pages_revisions_changes' => '變動',
    'pages_revisions_current' => '目前版本',
    'pages_revisions_preview' => '預覽',
    'pages_revisions_restore' => '還原',
    'pages_revisions_none' => '此頁面沒有修訂',
    'pages_copy_link' => '複製連結',
    'pages_edit_content_link' => '移動到編輯器區段',
    'pages_pointer_enter_mode' => '進入區段選取模式',
    'pages_pointer_label' => '頁面區段選項',
    'pages_pointer_permalink' => '頁面區段永久連結',
    'pages_pointer_include_tag' => '包含標籤的頁面區段',
    'pages_pointer_toggle_link' => '永久連結模式，點擊顯示包含的標籤',
    'pages_pointer_toggle_include' => '包含標籤模式，按下顯示永久鏈接',
    'pages_permissions_active' => '頁面權限已啟用',
    'pages_initial_revision' => '初次發布',
    'pages_references_update_revision' => '系統自動更新的內部鏈接',
    'pages_initial_name' => '新頁面',
    'pages_editing_draft_notification' => '您正在編輯最後儲存為 :timeDiff 的草稿。',
    'pages_draft_edited_notification' => '此頁面已經被更新過。建議您放棄此草稿。',
    'pages_draft_page_changed_since_creation' => '這個頁面在您的草稿創建後被其他用戶更新了，您目前的草稿不包含新的內容。建議您放棄此草稿，或是注意不要覆蓋新的頁面更改。',
    'pages_draft_edit_active' => [
        'start_a' => ':count 位使用者已經開始編輯此頁面',
        'start_b' => '使用者 :userName 已經開始編輯此頁面',
        'time_a' => '自頁面上次更新以來',
        'time_b' => '在最近:minCount分鐘',
        'message' => ':start :time。注意不要覆寫其他人的更新！',
    ],
    'pages_draft_discarded' => '草稿已丟棄！編輯器已更新到當前頁面內容',
    'pages_draft_deleted' => '草稿已刪除！編輯器已更新為當前頁面內容',
    'pages_specific' => '特定頁面',
    'pages_is_template' => '頁面模板',

    // Editor Sidebar
    'toggle_sidebar' => '切換側邊欄',
    'page_tags' => '頁面標籤',
    'chapter_tags' => '章節標籤',
    'book_tags' => '書本標籤',
    'shelf_tags' => '書架標籤',
    'tag' => '標籤',
    'tags' =>  '標籤',
    'tags_index_desc' => '為內容加上標籤可靈活得進行分類。標籤可以設定名稱與數值，其中數值為選用。一旦標籤設定完成，便可透過標籤名稱與數值來進行搜尋。',
    'tag_name' =>  '標籤名稱',
    'tag_value' => '標籤值（選擇性）',
    'tags_explain' => "加入一些標籤以更好地對您的內容進行分類。 \n 您可以為標籤分配一個值，以進行更深入的組織。",
    'tags_add' => '新增另一個標籤',
    'tags_remove' => '移除此標籤',
    'tags_usages' => '總用量',
    'tags_assigned_pages' => '頁面',
    'tags_assigned_chapters' => '章節',
    'tags_assigned_books' => '書籍',
    'tags_assigned_shelves' => '書架',
    'tags_x_unique_values' => ':count 個不同的數值',
    'tags_all_values' => '所有數值',
    'tags_view_tags' => '檢視標籤',
    'tags_view_existing_tags' => '檢視已存在的標籤',
    'tags_list_empty_hint' => '可在編輯書架、書籍時設定標籤，或是在編輯章節、頁面時透過側邊欄設定',
    'attachments' => '附件',
    'attachments_explain' => '上傳一些檔案或附加連結以顯示在您的網頁上。將顯示在在頁面的側邊欄。',
    'attachments_explain_instant_save' => '此處的變動將會立刻儲存。',
    'attachments_upload' => '上傳檔案',
    'attachments_link' => '附加連結',
    'attachments_upload_drop' => '你也可以將檔案拖曳到此來上傳附加檔案',
    'attachments_set_link' => '設定連結',
    'attachments_delete' => '您確定要刪除此附件嗎？',
    'attachments_dropzone' => '將檔案拖曳至此來上傳',
    'attachments_no_files' => '尚未上傳檔案',
    'attachments_explain_link' => '如果您不想上傳檔案，則可以附加連結。這可以是指向其他頁面的連結，也可以是指向雲端檔案的連結。',
    'attachments_link_name' => '連結名稱',
    'attachment_link' => '附件連結',
    'attachments_link_url' => '連結到檔案',
    'attachments_link_url_hint' => '網站或檔案的網址',
    'attach' => '附加',
    'attachments_insert_link' => '將附件連結新增到頁面',
    'attachments_edit_file' => '編輯檔案',
    'attachments_edit_file_name' => '檔案名稱',
    'attachments_edit_drop_upload' => '拖曳檔案或點擊此處以上傳並覆寫',
    'attachments_order_updated' => '附件順序已更新',
    'attachments_updated_success' => '附件資訊已更新',
    'attachments_deleted' => '附件已刪除',
    'attachments_file_uploaded' => '附件上傳成功',
    'attachments_file_updated' => '附件更新成功',
    'attachments_link_attached' => '連結成功附加到頁面',
    'templates' => '範本',
    'templates_set_as_template' => '頁面為範本',
    'templates_explain_set_as_template' => '您可以將此頁面設定為範本，以便在建立其他頁面時利用其內容。如果其他使用者對此頁面擁有檢視權限，則將可以使用此範本。',
    'templates_replace_content' => '替換頁面內容',
    'templates_append_content' => '附加到頁面內容',
    'templates_prepend_content' => '前置頁面內容',

    // Profile View
    'profile_user_for_x' => '來這裡 :time 了',
    'profile_created_content' => '已建立內容',
    'profile_not_created_pages' => ':userName 尚未建立任何頁面',
    'profile_not_created_chapters' => ':userName 尚未建立任何章節',
    'profile_not_created_books' => ':userName 尚未建立任何書本',
    'profile_not_created_shelves' => ':userName 沒有創建任何書架',

    // Comments
    'comment' => '評論',
    'comments' => '評論',
    'comment_add' => '新增評論',
    'comment_placeholder' => '在這裡評論',
    'comment_count' => '{0} 無評論 |{1} :count 則評論 |[2,*] :count 則評論',
    'comment_save' => '儲存評論',
    'comment_new' => '新評論',
    'comment_created' => '評論於 :createDiff',
    'comment_updated' => '由 :username 於 :updateDiff 更新',
    'comment_updated_indicator' => '已更新',
    'comment_deleted_success' => '評論已刪除',
    'comment_created_success' => '評論已加入',
    'comment_updated_success' => '評論已更新',
    'comment_delete_confirm' => '您確定要刪除這則評論？',
    'comment_in_reply_to' => '回覆 :commentId',
    'comment_editor_explain' => '此為頁面上的評論。在查看檢視與儲存頁面的同時，可以新增和管理評論。',

    // Revision
    'revision_delete_confirm' => '您確定要刪除此修訂版本嗎？',
    'revision_restore_confirm' => '您確定要還原此修訂版本嗎？ 目前頁面內容將被替換。',
    'revision_cannot_delete_latest' => '無法刪除最新修訂版本。',

    // Copy view
    'copy_consider' => '複製內容時請注意以下事項',
    'copy_consider_permissions' => '自定義權限設置將不會被複製。',
    'copy_consider_owner' => '您將成為所有已複製內容的所有者。',
    'copy_consider_images' => '頁面中的圖像文件不會被複製，原始圖像將保留它們與最初上傳到的頁面的關係。',
    'copy_consider_attachments' => '頁面中的附件不會被複製。',
    'copy_consider_access' => '改變位置、所有者或權限可能會導致此內容被以前無法訪問的人訪問。',

    // Conversions
    'convert_to_shelf' => '轉換成書架',
    'convert_to_shelf_contents_desc' => '你可以將此書籍轉換成包含相同內容的新書架，書籍中的章節則會轉換成書籍。若書籍中有不屬於任何章節的頁面，這些頁面會自動轉換成新書架中的書籍。',
    'convert_to_shelf_permissions_desc' => '在這本書上設置的任何權限都將複製到所有未強制執行權限的新書架和新子圖書上。請注意，書架上的權限不會像圖書那樣繼承到內容物上。',
    'convert_book' => '轉換成書本',
    'convert_book_confirm' => '您確定要轉換此書本嗎？',
    'convert_undo_warning' => '這可不能輕易撤消。',
    'convert_to_book' => '轉換成書籍',
    'convert_to_book_desc' => '您可以將此章節轉換為具有相同內容的新書本。此章節中設置的任何權限都將複製到新書本上，但從父圖書繼承的任何權限都不會被複製，這可能會導致訪問控制發生變化。',
    'convert_chapter' => '轉換章節',
    'convert_chapter_confirm' => '您確定要轉換此章節嗎？',

    // References
    'references' => '引用',
    'references_none' => '沒有跟蹤到對此項目的引用。',
    'references_to_desc' => '下方列出了系統中鏈接到此項目的所有已知內容。',

    // Watch Options
    'watch' => '追蹤',
    'watch_title_default' => '預設偏好設定',
    'watch_desc_default' => '還原成預設的通知設定',
    'watch_title_ignore' => '忽略',
    'watch_desc_ignore' => '忽略所有通知，包括來自用戶級偏好的通知。',
    'watch_title_new' => '新頁面',
    'watch_desc_new' => '在此項目中創建任何新頁面時通知我。',
    'watch_title_updates' => '所有頁面更新',
    'watch_desc_updates' => '在所有新頁面和頁面更改時通知我。',
    'watch_desc_updates_page' => '在有頁面發生更改時通知我。',
    'watch_title_comments' => '所有頁面更新和評論',
    'watch_desc_comments' => '在有新頁面、頁面更改和新評論時通知我。',
    'watch_desc_comments_page' => '在有頁面更改和新評論時通知我。',
    'watch_change_default' => '更改默認通知偏好',
    'watch_detail_ignore' => '忽略通知',
    'watch_detail_new' => '追蹤新頁面',
    'watch_detail_updates' => '追蹤新頁面與異動',
    'watch_detail_comments' => '追蹤新頁面、自動與評論',
    'watch_detail_parent_book' => '已關注—繼承自父書本',
    'watch_detail_parent_book_ignore' => '已忽略—繼承自父書本',
    'watch_detail_parent_chapter' => '已關注—繼承自父章節',
    'watch_detail_parent_chapter_ignore' => '已忽略—繼承自父章節',
];
