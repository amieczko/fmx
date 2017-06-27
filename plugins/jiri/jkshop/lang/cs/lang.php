<?php

return [
    'plugin' => [
        'name' => 'JKShop',
        'description' => 'Nejlepší eCommerce plugin pro OctoberCMS',
        'access_settings' => 'Přístup do nastavení',
        'access_orders' => 'Přístup do objednávek',
        'access_products' => 'Přístup do produktů',
        'access_categories' => 'Přístup do kategorií',
        'access_brands' => 'Přístup do značek',
        'access_taxes' => 'Přístup do daní',
        'access_carriers' => 'Přístup do dopravců',
        'access_orderstatuses' => 'Přístup do stavů objednávek',
        'access_properties' => 'Přístup do vlastností',
        'access_coupons' => 'Přístup do kuponů',
        'access_paymentgateways' => 'Přístup do platebních bran',
        'main_menu' => 'JK Shop',
        'please_select' => '-- Prosím vyberte --',
    ],
    'settings' => [
        'menu_label' => 'JK Shop Settings',
        'description' => 'Základní nastavení JK Shop.',
        'category' => 'JK Shop',
        'general' => 'Obecné',
        'emails_section' => 'Emaily',
        'copy_all_order_emails_to' => 'Kopírovat všechny odchozí emaily na',
        'user_details_section' => 'Formát čísel',
        'number_format_thousands_sep' => 'Oddělovač tisíců',
        'number_format_decimals' => 'Počet desetinných míst',
        'number_format_dec_point' => 'Desetinná čárka',
        'currency_char' => 'Měna',
        'currency_char_position' => 'Znak měny před / po ceně',
        'currency_char_position_before' => 'Před',
        'currency_char_position_after' => 'Za',
        'cash_on_delivery' => 'Dobírka',
        'bank_transfer' => 'Bankovním převodem',
        'paypal' => 'Paypal',
        'stripe' => 'Stripe',
        'invoice_template' => 'Šablona faktury',
        'active' => 'Aktivní',
        'order_status_before' => 'Stav objednávky - před platbou',
        'order_status_after' => 'Stav objednávky - po platbě',
        'paypal_use_sandbox' => 'Použít testovací prostředí',
        'paypal_use_sandbox_comment' => 'Pouze pro testování!',
        'paypal_debug' => 'Ladění',
        'paypal_debug_comment' => 'Pouze pro testování!',
        'paypal_business' => 'Podnikatelský účet',
        'paypal_business_comment' => 'Váš podnikatelský účet',
        'paypal_currency_code' => 'Kód měny',
        'paypal_currency_code_comment' => 'Všechny kódy měn naleznete zde "https://developer.paypal.com/docs/classic/api/currency_codes/"',
        'paypal_return_url' => 'Zpáteční URL adresa',
        'paypal_return_url_comment' => 'Použijte plnou URL adresu na kterou se mají zákazníci vrátit po zaplacení "http://www.example.com/paypal-success"',
        'help_section' => 'Nápověda',
        'stripe_currency_code' => 'Kód měny',
        'stripe_currency_code_comment' => 'Všechny kódy měn naleznete zde "https://support.stripe.com/questions/which-currencies-does-stripe-support"',
        'stripe_return_url' => 'Zpáteční URL adresa',
        'stripe_return_url_comment' => 'Použijte plnou URL adresu na kterou se mají zákazníci vrátit po zaplacení "http://www.example.com/paypal-success"',
        'stripe_secret_key' => "Tajný klíč [Secret Key]",
        'stripe_secret_key_comment' => "Pro testování použijte tento: 'sk_test_BQokikJOvBiI2HlWgH4olfQ2'",
        'stripe_publishable_key' => "Veřejný klíč [Publishable Key]",
        'stripe_publishable_key_comment' => "Pro testování použijte tento: 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'",
        'stripe_help_line_1' => "Tato implementace používá <a href='https://stripe.com/checkout' target='_blank'>one page checkout</a>. Pro správné fungování vyplntě všechna pole uvedené výše.",
        'stripe_help_line_2' => "<a href='https://stripe.com/docs/testing#cards' target='_blank'>Testovací kteritní karty</a>",
        'stripe_help_line_3' => "Testovací soukromý klíč [Secret Key]: 'sk_test_BQokikJOvBiI2HlWgH4olfQ2'",
        'stripe_help_line_4' => "Testovací veřejný klíč  [Publishable Key]: 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'",
        'invoice_template_style' => 'Šablona faktury CSS',
        'invoice_template_content' => 'Šablona faktury',
        'invoice_help_section' => 'Nápověda',
        'invoice_help_section_comment' => 'Můžete použít tyto tagy v šabloně faktury',
        'invoice_help_order_id' => 'Objednávka ID',
        'invoice_help_first_name' => 'Jméno',
        'invoice_help_last_name' => 'Příjmení',
        'invoice_help_address' => 'Adresa',
        'invoice_help_address2' => 'Adresa řádek 2',
        'invoice_help_postcode' => 'PSČ',
        'invoice_help_city' => 'Město',
        'invoice_help_county' => 'Region',
        'invoice_help_country' => 'Stát',
        'invoice_help_ds_first_name' => 'Doručovací adresa: Jméno',
        'invoice_help_ds_last_name' => 'Doručovací adresa: Příjmení',
        'invoice_help_ds_address' => 'Doručovací adresa: Adresa',
        'invoice_help_ds_address2' => 'Doručovací adresa: Adresa řádek 2',
        'invoice_help_ds_postcode' => 'Doručovací adresa: PSČ',
        'invoice_help_ds_city' => 'Doručovací adresa: Město',
        'invoice_help_ds_county' => 'Doručovací adresa: Region',
        'invoice_help_ds_country' => 'Doručovací adresa: Stát',
        'invoice_help_email' => 'Email',
        'invoice_help_phone' => 'Telefon',
        'invoice_help_total_price_without_tax' => 'Celková cena bez daně',
        'invoice_help_total_tax' => 'Celková daň',
        'invoice_help_total_price' => 'Celková cena',
        'invoice_help_payment_method' => 'Platební metoda',
        'invoice_help_date_now' => 'Dnešní datum',
        'invoice_help_date_now_14' => 'Dnešní datum + 14 dní',
        'invoice_help_date_now_31' => 'Dnešní datum + 31 dní',
        'invoice_help_products' => 'Seznam produktů (název, počet, cena)',
        'paypal_help_line_1' => 'Tato paypal implementace používá <a href="https://developer.paypal.com/docs/classic/ipn/integration-guide/IPNIntro/" target="_blank">IPN komunikaci</a>. Pro správné fungování nastavte:',
        'paypal_help_line_2' => '1. Vyplňte všechny políčka výše',
        'paypal_help_line_3' => '2. Zapněte IPN zprávy a nastavte ověřovací URL (<a href="https://developer.paypal.com/docs/classic/ipn/integration-guide/IPNSetup/" target="_blank">Jak nastavit IPN ověřovací zprávy pro PayPal</a>)',
        'paypal_help_line_4' => '3. Zapněte automatické přesměrování po zaplacení <a href="https://developer.paypal.com/docs/classic/admin/checkout-settings/?mark=Website%20preferences#auto-returning-the-buyer-to-your-website" target="_blank">Automatické přesměrování</a>',
        'help_debug' => 'Ladění',
        'paypal_help_debug_line_1' => '- Pokud zapnete režim ladění, můžete najít log v /storage/temp/ipn.log',
        'general_help_debug_line_2' => '- Všechny zprávy jsou uloženy v OctoberCMS ',
        'general_help_debug_eventlogs' => 'logu událostí',
        'product_default_image' => "Produkt - výchozí obrázek",
        'section_obsolete' => 'TATO SEKCE JE ZASTARALÁ',
        'section_obsolete_comment' => 'Všechny platební metody jsou nyní zde: JKshop - Platební brány',
        'extended_inventory_management' => 'Rozšířené řízení zásob',
        'extended_inventory_management_comment' => 'In the default is stock decrease after create order. When you enable this extension you have to specify decrease / increase in order statuses',
        'extended_inventory_management' => 'Enable Extended Inventory Management',
    ],
    'orders' => [
        'menu_label' => 'Objednávky',
        'menu_label_single' => 'Objednávka',
        'create_order' => "Vytvořit objednávku",
        'edit_order' => "Editovat objednávku",
        'preview_order' => "Náhled objednávky",
        'manage_orders' => "Zpravovat objednávky",
        'detail' => "Detail",
        'customer' => "Zákazník",
        'prices' => "Ceny",
        'none' => "nic",
        'id' => "ID",
        'orderstatus' => 'Stav objednávky',
        'orderstatus_comment' => "Nezapomeňte - každý změna statusu objednávky může vygenerovat emaily dle nastavení v manažeru statusů objednávek",
        'carrier' => "Dopravce",
        'invoice' => "Faktura",
        'products_json' => "Produkty",
        'product_id' => "Produkt",
        'quantity' => "Počet",
        'total_price_without_tax' => "Celková cena bez daně",
        'total_tax' => "Celková daň",
        'total_price' => "Celková cena",
        'user_id' => "Zákazník",
        'user_id_comment' => "Použijte RainLab.User plugin - https://octobercms.com/plugin/rainlab-user",
        'contact_address_section' => "Kontaktní informace",
        'contact_email' => "Email",
        'contact_phone' => "Telefon",
        'delivery_address_section' => "Doručovací adresa",
        'invoice_address_section' => "Fakturační adresa",
        'ds_first_name' => "Jméno",
        'is_first_name' => "Jméno",
        'ds_last_name' => "Příjmení",
        'is_last_name' => "Příjmení",
        'ds_address' => "Adresa",
        'is_address' => "Adresa",
        'ds_address_2' => "Adresa 2",
        'is_address_2' => "Adresa 2",
        'ds_postcode' => "PSČ",
        'is_postcode' => "PSČ",
        'ds_city' => "Město",
        'is_city' => "Město",
        'ds_county' => "Region",
        'is_county' => "Region",
        'ds_country' => "Stát",
        'is_country' => "Stát",
        'total_price_without_tax' => "Celková cena bez daně",
        'total_tax' => "Celková daň",
        'total_price' => "Celková cena",
        'shipping_price_without_tax' => "Cena poštovného bez daně",
        'shipping_tax' => "Daň poštovného",
        'shipping_price' => "Cena poštovného",
        'payment_method' => "Platební metoda",
        'payment_method_field' => "ZASTARALÁ Platební metoda ( pouze pro hisorické objednávky )",
        'payment_gateway' => "Platební brány",
        'paid_date' => "Datum zaplacení",
        'paid_detail' => "Platební informace",
        'btn_new' => "Nová objednávka",
        'paid' => "Zaplaceno",
        'pending' => "Čeká",
        'orders_30_days' => "Objednávky za 30 dní",
        'sales_30_days' => "Prodeje za 30 dní",
        'previous_30_days' => "předchozích 30 dní",
        'options_text' => "Nastavení",
        'note' => "Poznámka",
        'tracking_number' => "Trackovací číslo zásilky",
        'coupon' => "Kupón",
        'total_global_discount' => "Celková globální sleva (již zahrnuta v totální ceně)",
        ],
    'products' => [
        'menu_label' => 'Produkty',
        'menu_label_single' => "Produkt",
        'create' => "Vytvořit produkt",
        'edit' => "Editovat produkt",
        'preview' => "Náhled produktu",
        'manage' => "Zpravovat produkty",          
        'title' => "Název",
        'slug' => "Slug",
        'ean_13' => "EAN 13",
        'barcode' => "Čárový kód",
        'active' => "Aktivní",
        'visibility' => "Viditelnost",
        'available_for_order' => "Dostupný k objednání",
        'show_price' => "Zobrazit cenu",
        'condition' => "Podmínka",
        'brand' => "Značka",
        'short_description' => "Krátký popis",
        'description' => "Popis",
        'pre_tax_wholesale_price' => "Před zdaněním - velkoobchodní cena",
        'pre_tax_wholesale_price_comment' => "Velkoobchodní cena je cena, kterou jste zaplatil za výrobek. Nezahrnuje daň.",
        'pre_tax_retail_price' => "Před zdaněním - maloobchodní cena",
        'pre_tax_retail_price_comment' => "Před zdaněním maloobchodní cena je cena, za kterou máte v úmyslu prodat tento produkt svým zákazníkům. Měla by být vyšší než cena, za kterou produkt nakupujete uvedená výše: rozdíl mezi nimi bude vaše marže.",
        'tax' => "Daňové pravidlo",
        'retail_price_with_tax' => "Maloobchodní cena s DPH",
        'retail_price_with_tax_comment' => "Automaticky se vypočte pokud vyberete daň a vyplníte cenu bez daně",
        'on_sale' => "Ve slevě - zobrazí ikonu u produktu",
        'individual_prices' => "Individuální ceny",
        'individual_price' => "Individuální cena",
        'customer' => "Zákazník",
        'customer_comment' => "Použijte RainLab.User plugin - https://octobercms.com/plugin/rainlab-user",
        'meta_title' => "Meta titulek",
        'meta_keywords' => "Meta klíčová slova",
        'meta_keywords_comment' => "telefon, iphone, android,..",
        'meta_description' => "Meta popisek",
        'default_category' => "Defaultní kategorie",
        'default_category_comment' => "Výchozí kategorie jsou hlavní kategorií pro váš produkt, a zobrazí se ve výchozím nastavení.",
        'categories' => "Přidružené kategorie",
        'package_width' => "Balení - šířka",
        'package_height' => "Balení - výška",
        'package_depth' => "Balení - hloubka",
        'package_weight' => "Balení - váha",
        'additional_shipping_fees' => "Doplňkové přepravní poplatky (pro samostatnou položku)",
        'quantity' => "Počet",
        'when_out_of_stock' => "Pokud není skladem",
        'minimum_quantity' => "Minimální počet",
        'minimum_quantity_comment' => "Minimální počet pro objednání tohoto produktu (nastavte na 1 pro vypnuté této utility)",
        'availability_date' => "Dostupné dne",
        'availability_date_comment' => "Příští datum dostupnosti tohoto produktu, pokud to není na skladě.",
        'customization' => "Přidat nebo upravit volitelné vlastností",
        'label' => "Definují popisek textových polí",
        'value' => "Hodnota",
        'accessories' => "Příslušenství",
        'featured' => "Podobné produkty",
        'images' => "Obrázky",
        'attachments' => "Přílohy",
        'detail' => "Detail",
        'prices' => "Ceny",
        'seo' => "SEO",
        'categories' => "Kategorie",
        'size_weight' => "Velikost, Váha",
        'quantities' => "Množství",
        'customization_tab' => "Přizpůsobení",
        'featured_tab' => "Podobné produkty",
        'when_out_of_stock_0' => "Zakázat objednání",
        'when_out_of_stock_1' => "Povolit objednání",
        'condition_0' => "Nové",
        'condition_1' => "Použité",
        'condition_2' => "Repasované",
        'id' => "ID",
        'image' => "Obrázek",
        'btn_new' => "Nový produkt",
        'inactive' => "Neaktivní",
        'on_sale_1' => "Ve slevě",
        'low_stock' => "Poslední kusy na skladě",
        'out_of_stock' => "Vyprodáno",
        'properties_tab' => "Vlastnosti",
        'properties' => "Můžete si vybrat vlastnosti, které chcete mít v tomto produktu",
        'basic_properties_section' => "Základní vlastnosti",
        'advanced_properties_section' => "Rozšířené vlastnosti",
        'advanced_properties_section_comment' => "Můžete si vybrat vlastnosti, které chcete mít u tohoto produktu (můžete kombinovat s obecnými vlastnostmi)",
        'property_option' => "Možnost",
        'image' => "Obrázek",
        'price_difference_with_tax' => "Cenový rozdíl s daní",
    ],   
    'categories' => [
        'menu_label' => 'Kategorie',
        'menu_label_single' => "Kategorie",
        'create_category' => "Vytvořit kategorii",
        'edit_category' => "Editovat kategorie",
        'preview_category' => "Náhled kategorie",
        'manage_categories' => "Zpravovat kategorie",
        'title' => "Název",
        'slug' => "Slug",
        'active' => "Aktivní",
        'show_in_menu' => "Zobrazit v menu",
        'description' => "Popis",
        'thumbnails' => "Miniatury",
        'parent' => "Rodič",
        'meta_title' => "Meta titulek",
        'meta_keywords' => "Meta klíčová slova",
        'meta_keywords_comment' => "telefon, iphone, android,..",
        'meta_description' => "Meta popisek",
        'sales' => "Slevy",
        'detail' => "Detail",
        'seo' => "SEO",
        'id' => "ID",
        'btn_new' => "Nová kategorie",
        'btn_reorder' => "Přeřadit kategorie",
        'sales_percent' => "Slevy %",
        'sales_percent_comment' => "5, 10, 15, 20 atd..",
        'customer' => "Zákazník",
        'customer_comment' => "Použijte RainLab.User plugin - https://octobercms.com/plugin/rainlab-user",
        
    ],   
    'brands' => [
        'brand' => 'Značka',
        'create_brand' => 'Vytvořit značku',
        'edit_brand' => 'Editovat značku',
        'preview_brand' => 'Náhled značky',
        'manage_brands' => 'Zpravovat značky',
        'menu_label' => 'Značky',
        'title' => "Název",
        'slug' => "Slug",
        'active' => "Aktivní",
        'show_in_menu' => "Zobrazit v menu",
        'short_description' => "Krátký Popisek",
        'description' => "Popisek",
        'logo' => "Logo",
        'meta_title' => "Meta popisek",
        'meta_keywords' => "Meta klíčová slova",
        'meta_keywords_comment' => "telefon, iphone, android,..",
        'meta_description' => "Meta popisek",
        'seo' => "SEO",
        'id' => "ID",
        'detail' => "Detail",
        'btn_new' => "Nová značka",
    ],   
    'carriers' => [
        'menu_label' => 'Dopravci',
        'menu_label_single' => 'Dopravce',
        'create_carrier' => "Vytvořit dopravce",
        'edit_carrier' => "Editovat dopravce",
        'preview_carrier' => "Náhled dopravce",
        'manage_carriers' => "Zpravovat dopravce",
        'active' => "Aktivní",
        'title' => "Název",
        'transit_time' => "Tranzitní čas",
        'transit_time_comment' => "Odhadovaná doba dodání, bude se zobrazovat při placení.",
        'speed_grade' => "Rychlostní stupeň",
        'speed_grade_comment' => "Vložte &quot;0&quot; pro nejpomalejší doručení, nebo &quot;9&quot; pro nejrychlejší doručení.",
        'tracking_url' => "URL pro sledování zásilek",
        'tracking_url_comment' => "Například: 'http://exampl.com/track.php?num=@' za '@' bude doplněno trackovací číslo zásilky.",
        'logo' => "Logo",
        'free_shipping' => "Doručení zdarma",
        'tax' => "Daň",
        'billing' => "Cena",
        'billing_total_price' => "Cena - dle celkové ceny objednávky",
        'billing_weight_from' => "Bude použito pokud je váha >= [kg]",
        'billing_weight_to' => "Bude použito pokud je váha  < [kg]",
        'price' => "Cena",
        'billing_weight' => "Cena - dle celkové hmotnosti objednávky",
        'from' => "Bude použito pokud je cena  >=",
        'to' => "Bude použito pokud je cena <",
        'price' => "Cena",
        'maximum_package_width' => "Maximální šířka zásilky",
        'maximum_package_height' => "Maximální výška zásilky",
        'maximum_package_depth' => "Maximální hloubka zásilky",
        'maximum_package_weight' => "Maximální váha zásilky",
        'size_weight' => "Rozměry, Váha",
        'pricing' => "Cena",
        'detail' => "Detail",
        'btn_new' => "Nový dopravce",
        'billing_1' => "Dle celkové ceny",
        'billing_2' => "Dle celkové váhy",
    ],     
    'taxes' => [
        'menu_label' => 'Daně',
        'menu_label_single' => "Daň",
        'create' => "Vytvořit daň",
        'edit' => "Editovat daň",
        'preview' => "Náhled daně",
        'manage' => "Zpravovat daně",        
        'btn_new' => 'Nová daň',
        'active' => 'Aktivní',
        'name' => 'Název',
        'percent' => 'Daň v procentech',
        'percent_comment' => '15, 21, atd..',
        'id' => 'ID',
    ],     
    'orderstatuses' => [
        'menu_label' => 'Stavy objednávek',
        'menu_label_single' => "Stavy objednávky",
        'create' => "Vytvořit stav objednávky",
        'edit' => "Editovat stav objednávky",
        'preview' => "Náhled stavu objednávky",
        'manage' => "Zpravovat stavy objednávek",
        'btn_new' => 'Nový stav objednávky',
        'btn_manage_mail_templates' => 'Zpravovat šablony emailů',
        'id' => 'ID',
        'title' => 'Název',
        'active' => 'Aktivní',
        'send_email_to_customer' => 'Email zákazníka',
        'attach_invoice_pdf_to_email' => 'Připojit fakturu v PDF',
        'mail_template' => 'Šablona emailu',
        'color' => 'Barva',
        'send_email_to_customer_field' => 'Poslat e-mail zákazníkovi, pokud došlo ke změně stavu objednávky.',
        'attach_invoice_pdf_to_email_field' => 'Připojit fakturu v PDF',
        'mail_template_info' => 'Ve všech e-mailových šablonách, můžete použít tyto kódy',
        'first_name' => 'Jméno',
        'last_name' => 'Příjmení',
        'order_id' => 'ID objednávky',
        'tracking_url' => 'URL pro sledování zásilek',
        
        'disallow_for_gateway' => 'Zakázat pro brány',
        'disallow_for_gateway_comment' => 'Zakázat objednávky s tímto statusem pro platební brány například: zaplacené, zrušené, atd..',
        'qty_increase_back' => 'Vrácení zboží na sklad',
        'qty_increase_back_comment' => 'QTY Increase back eg: canceled or returned order etc..',
        'qty_decrease' => 'Vydání zboží ze skladu',
        'qty_decrease_comment' => 'Odebrání zboží ze skladu např.: odesláno nebo zaplaceno',
        'extended_inventory_management' => 'Rozšířené řízení skladových zásob',
        'extended_inventory_management_comment' => 'Nastavení pracuje pouze pokud je ZAPNUTO Works only with ENABLE rozšířené řízení skladových zásob. Zkontrolujte v JK Shop nastavení',
        
    ],
    'form' => [
        'create' => 'Vytvořit',
        'create_and_close' => 'Vytvořit a zavřít',
        'cancel' => 'Zrušit',
        'save_and_close' => 'Uložit a zavřít',
        'save' => 'Uložit',
        'or' => 'nebo',
        'return_to_list' => 'Zpět na seznam',
    ],
    'properties' => [
        'menu_label' => 'Vlastnosti',
        'menu_label_single' => "Vlastnost",
        'create' => "Vytvořit vlastnost",
        'edit' => "Editovat vlastnost",
        'preview' => "Náhled vlastnosti",
        'manage' => "Zpravovat vlastnosti",
        'btn_new' => 'Nová vlastnost',
        'id' => 'ID',
        'title' => 'Název',
        'placeholder' => "Placeholder",
        'type' => "Typ",
        'options' => "Možnosti",
        'option' => "Možnost",
        'order' => "Řazení",
        'type_1' => "Select",
        'type_2' => "Select multiple",
        'type_3' => "Textbox",
        'type_4' => "Číslo",
        'type_5' => "Checkbox",
        'first_create_property' => "prvně vytvořte vlastnost",
        'required' => "Povinné",
    ],    
 'coupons' => [
        'menu_label' => 'Kupóny',
        'menu_label_single' => "Kupón",
        'create' => "Vytvořit kupón",
        'update' => "Aktualizovat kupón",
        'edit' => "Editovat kupón",
        'preview' => "Náhled kupónu",
        'manage' => "Zpravovat kupón",
        'btn_new' => 'Nový kupón',
        'first_create_property' => "prvně vytvořte kupón",
        'type_value_1' => "Procentuální sleva",
        'type_value_2' => "Finanční sleva",
        'active' => "Aktivní",
        'code' => "Kód",
        'code_comment' => "Kód bude atomaticky vygenerován po vytvoření kupónu",
        'valid_from' => "Platný od",
        'valid_to' => "Platný do",
        'valid_to_comment' => "Pokud je prázdné, platí kdykoliv",
        'count' => "Limit počtu použítí",
        'count_comment' => "Pokud je nula, platí neomezeně",
        'used_count' => "Počet použitých kupńů",
        'minimum_value_basket' => "Minimální celková cena košíku",
        'minimum_value_basket_comment' => "Je možné použít pouze pro globální kupón - viz výše",
        'value' => "Hodnota",
        'type_value' => "Typ hodnoty",
        'created_at' => "Vytvořeno dne",
        'user_menu_label_single' => "Uživatel",
        'categories' => "Kategorie",
        'products' => "Producty",
        'users' => "Uživatelé (Pokud nejsou vybráni uživatelé, platí pro všechny uživatele)",
        'global_section' => "Globální vs Kupón na položku",
        'global_section_comment' => "Pokud vyberete produkt nebo kategorii bude tento kupón použit na každou vyhovujicí položku z košíku. Pokud produkty a kategorie jsou prázdné kupón bude použit jako globální sleva na celý košík.",
    ],   
];
