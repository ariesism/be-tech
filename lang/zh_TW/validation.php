<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted" => "必須接受。",
    "accepted_if" => "當 :other 為 :value 時，必須接受。",
    "active_url" => "不是有效的網址。",
    "after" => "必須要晚於 :date。",
    "after_or_equal" => "必須要等於 :date 或更晚。",
    "alpha" => "只能以字母組成。",
    "alpha_dash" => "只能以字母、數字、連接線(-)及底線(_)組成。",
    "alpha_num" => "只能以字母及數字組成。",
    "array" => "必須為陣列。",
    "ascii" => "只能以半形英數符號組成。",
    "attached" => "已經附加。",
    "before" => "必須要早於 :date。",
    "before_or_equal" => "必須要等於 :date 或更早。",
    "between.array" => "必須有 :min - :max 個元素。",
    "between.file" => "必須介於 :min 至 :max KB 之間。",
    "between.numeric" => "必須介於 :min 至 :max 之間。",
    "between.string" => "必須介於 :min 至 :max 個字元之間。",
    "boolean" => "必須為布林值。",
    "can" => "該字段包含未經授權的值。",
    "confirmed" => "確認欄位的輸入不一致。",
    "current_password" => "密碼輸入不正確",
    "country" => "不是有效的國家。",
    "date" => "不是有效的日期。",
    "date_equals" => "必須等於 :date。",
    "date_format" => "不符合 :format 的格式。",
    "decimal" => "必須為 :decimal 位數。",
    "declined" => "必須拒絕。",
    "declined_if" => "當 :other 為 :value 時，必須拒絕。",
    "different" => "必須與 :other 不同。",
    "digits" => "必須是 :digits 位數字。",
    "digits_between" => "必須介於 :min 至 :max 位數字。",
    "dimensions" => "圖片尺寸不正確。",
    "distinct" => "已經存在。",
    "doesnt_end_with" => "結尾不能包含下列之一： :values。",
    "doesnt_start_with" => "開頭不能包含下列之一： :values。",
    "email" => "必須是有效的 E-mail。",
    "ends_with" => "結尾必須包含下列之一：:values。",
    "enum" => "無效的值。",
    "exists" => "不存在。",
    "file" => "必須是有效的檔案。",
    "filled" => "不能留空。",
    "gt.array" => "必須多於 :value 個元素。",
    "gt.file" => "必須大於 :value KB。",
    "gt.numeric" => "必須大於 :value。",
    "gt.string" => "必須多於 :value 個字元。",
    "gte.array" => "必須多於或等於 :value 個元素。",
    "gte.file" => "必須大於或等於 :value KB。",
    "gte.numeric" => "必須大於或等於 :value。",
    "gte.string" => "必須多於或等於 :value 個字元。",
    "image" => "必須是一張圖片。",
    'image' => [
        'max' => '已達最大上限:max張數',
    ],
    "in" => "選項無效。",
    "in_array" => "沒有在 :other 中。",
    "integer" => "必須是一個整數。",
    "ip" => "必須是一個有效的 IP 位址。",
    "ipv4" => "必須是一個有效的 IPv4 位址。",
    "ipv6" => "必須是一個有效的 IPv6 位址。",
    "json" => "必須是正確的 JSON 字串。",
    "lowercase" => "必須是小寫字母。",
    "lt.array" => "必須少於 :value 個元素。",
    "lt.file" => "必須小於 :value KB。",
    "lt.numeric" => "必須小於 :value。",
    "lt.string" => "必須少於 :value 個字元。",
    "lte.array" => "必須少於或等於 :value 個元素。",
    "lte.file" => "必須小於或等於 :value KB。",
    "lte.numeric" => "必須小於或等於 :value。",
    "lte.string" => "必須少於或等於 :value 個字元。",
    "mac_address" => "必須是一個有效的 MAC 位址。",
    "max.array" => "最多有 :max 個元素。",
    "max.file" => "不能大於 :max KB。",
    "max.numeric" => "不能大於 :max。",
    "max.string" => "不能多於 :max 個字元。",
    "max_digits" => "不能多於 :max 數字。",
    "mimes" => "必須為 :values 的檔案。",
    "mimetypes" => "必須為 :values 的檔案。",
    "min.array" => "至少有 :min 個元素。",
    "min.file" => "不能小於 :min KB。",
    "min.numeric" => "不能小於 :min。",
    "min.string" => "不能少於 :min 個字元。",
    "min_digits" => "不能少於 :min 數字。",
    "missing" => "該字段必須缺失。",
    "missing_if" => "當 :other 為 :value 時，此字段必須缺失。",
    "missing_unless" => "除非 :other 為 :value，否則此字段必須缺失。",
    "missing_with" => "當存在 :values 時，必須缺少此字段。",
    "missing_with_all" => "當存在 :values 時，必須缺少此字段。",
    "multiple_of" => "必須為 :value 中的多個。",
    "not_in" => "選項無效。",
    "not_regex" => "格式錯誤。",
    "numeric" => "必須為數字。",
    "password.letters" => "至少要包含一個字母。",
    "password.mixed" => "至少要包含一個大寫字母及一個小寫字母。",
    "password.numbers" => "至少要包含一個數字。",
    "password.symbols" => "至少要包含一個符號。",
    "password.uncompromised" => "似乎與外洩的密碼相符，請選擇其他的組合",
    "present" => "必須存在。",
    "prohibited" => "禁止使用。",
    "prohibited_if" => "當 :other 為 :value 時，禁止使用。",
    "prohibited_unless" => "除非 :other 在 :values 中，否則禁止使用。",
    "prohibits" => "必須不能包含 :other。",
    "regex" => "格式錯誤。",
    "relatable" => "可能與此資源不相關聯。",
    "required" => "不能留空。",
    "required_array_keys" => "必須至少包含一個鍵：:values.",
    "required_if" => "當 :other 是 :value 時不能留空。",
    "required_if_accepted" => "當 :other 被接受時不能留空",
    "required_unless" => "當 :other 不是 :values 時不能留空。",
    "required_with" => "當 :values 出現時不能留空。",
    "required_with_all" => "當 :values 出現時不能為空。",
    "required_without" => "當 :values 留空時不能留空。",
    "required_without_all" => "當 :values 都不出現時不能留空。",
    "same" => "必須與 :other 相同。",
    "size.array" => "必須是 :size 個元素。",
    "size.file" => "大小必須是 :size KB。",
    "size.numeric" => "大小必須是 :size。",
    "size.string" => "必須是 :size 個字元。",
    "starts_with" => "開頭必須包含下列之一：:values。",
    "string" => "必須是一個字串。",
    "timezone" => "必須是一個正確的時區值。",
    "ulid" => "必須是有效的 ULID.",
    "unique" => "已經存在。",
    "uploaded" => "上傳失敗。",
    "uppercase" => "必須是大寫字母。",
    "url" => "格式錯誤。",
    "uuid" => "必須是有效的 UUID。",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'values' => [
        'end_date' => [
            'today' => '今天'
        ]
    ],


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'start_date' => '開始日期',
        'end_date' => '結束日期',
    ],
];
