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

    'accepted' => 'Medan :attribute mesti diterima.',
    'accepted_if' => 'Medan :attribute mesti diterima apabila :other adalah :value.',
    'active_url' => 'Medan :attribute mestilah URL yang sah.',
    'after' => 'Medan :attribute mestilah tarikh selepas :date.',
    'after_or_equal' => 'Medan :attribute mestilah tarikh selepas atau sama dengan :date.',
    'alpha' => 'Medan :attribute hanya boleh mengandungi huruf.',
    'alpha_dash' => 'Medan :attribute hanya boleh mengandungi huruf, nombor, sengkang dan garis bawah.',
    'alpha_num' => 'Medan :attribute hanya boleh mengandungi huruf dan nombor.',
    'array' => 'Medan :attribute mestilah array.',
    'ascii' => 'Medan :attribute hanya boleh mengandungi aksara alfanumerik dan simbol byte tunggal.',
    'before' => 'Medan :attribute mestilah tarikh sebelum :date.',
    'before_or_equal' => 'Medan :attribute mestilah tarikh sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Medan :attribute mesti mempunyai antara :min dan :max item.',
        'file' => 'Medan :attribute mesti antara :min dan :max kilobait.',
        'numeric' => 'Medan :attribute mesti antara :min dan :max.',
        'string' => 'Medan :attribute mesti antara :min dan :max aksara.',
    ],
    'boolean' => 'Medan :attribute mestilah benar atau palsu.',
    'can' => 'Medan :attribute mengandungi nilai yang tidak dibenarkan.',
    'confirmed' => 'Pengesahan medan :attribute tidak sepadan.',
    'contains' => 'Medan :attribute tidak mengandungi nilai yang diperlukan.',
    'current_password' => 'Kata laluan tidak betul.',
    'date' => 'Medan :attribute mestilah tarikh yang sah.',
    'date_equals' => 'Medan :attribute mestilah tarikh sama dengan :date.',
    'date_format' => 'Medan :attribute mesti mengikut format :format.',
    'decimal' => 'Medan :attribute mesti mempunyai :decimal tempat perpuluhan.',
    'declined' => 'Medan :attribute mesti ditolak.',
    'declined_if' => 'Medan :attribute mesti ditolak apabila :other adalah :value.',
    'different' => 'Medan :attribute dan :other mesti berbeza.',
    'digits' => 'Medan :attribute mestilah :digits digit.',
    'digits_between' => 'Medan :attribute mestilah antara :min dan :max digit.',
    'dimensions' => 'Medan :attribute mempunyai dimensi imej yang tidak sah.',
    'distinct' => 'Medan :attribute mempunyai nilai berulang.',
    'doesnt_end_with' => 'Medan :attribute tidak boleh berakhir dengan salah satu daripada berikut: :values.',
    'doesnt_start_with' => 'Medan :attribute tidak boleh bermula dengan salah satu daripada berikut: :values.',
    'email' => 'Medan :attribute mestilah alamat e-mel yang sah.',
    'ends_with' => 'Medan :attribute mesti berakhir dengan salah satu daripada berikut: :values.',
    'enum' => ':attribute yang dipilih tidak sah.',
    'exists' => ':attribute yang dipilih tidak sah.',
    'extensions' => 'Medan :attribute mesti mempunyai salah satu sambungan berikut: :values.',
    'file' => 'Medan :attribute mestilah fail.',
    'filled' => 'Medan :attribute mesti mempunyai nilai.',
    'gt' => [
        'array' => 'Medan :attribute mesti mempunyai lebih daripada :value item.',
        'file' => 'Medan :attribute mestilah lebih besar daripada :value kilobait.',
        'numeric' => 'Medan :attribute mestilah lebih besar daripada :value.',
        'string' => 'Medan :attribute mestilah lebih besar daripada :value aksara.',
    ],
    'gte' => [
        'array' => 'Medan :attribute mesti mempunyai :value item atau lebih.',
        'file' => 'Medan :attribute mestilah lebih besar atau sama dengan :value kilobait.',
        'numeric' => 'Medan :attribute mestilah lebih besar atau sama dengan :value.',
        'string' => 'Medan :attribute mestilah lebih besar atau sama dengan :value aksara.',
    ],
    'hex_color' => 'Medan :attribute mestilah warna heksadesimal yang sah.',
    'image' => 'Medan :attribute mestilah imej.',
    'in' => ':attribute yang dipilih tidak sah.',
    'in_array' => 'Medan :attribute mesti wujud dalam :other.',
    'integer' => 'Medan :attribute mestilah integer.',
    'ip' => 'Medan :attribute mestilah alamat IP yang sah.',
    'ipv4' => 'Medan :attribute mestilah alamat IPv4 yang sah.',
    'ipv6' => 'Medan :attribute mestilah alamat IPv6 yang sah.',
    'json' => 'Medan :attribute mestilah rentetan JSON yang sah.',
    'list' => 'Medan :attribute mestilah senarai.',
    'lowercase' => 'Medan :attribute mestilah huruf kecil.',
    'lt' => [
        'array' => 'Medan :attribute mesti mempunyai kurang daripada :value item.',
        'file' => 'Medan :attribute mestilah kurang daripada :value kilobait.',
        'numeric' => 'Medan :attribute mestilah kurang daripada :value.',
        'string' => 'Medan :attribute mestilah kurang daripada :value aksara.',
    ],
    'lte' => [
        'array' => 'Medan :attribute tidak boleh mempunyai lebih daripada :value item.',
        'file' => 'Medan :attribute mestilah kurang atau sama dengan :value kilobait.',
        'numeric' => 'Medan :attribute mestilah kurang atau sama dengan :value.',
        'string' => 'Medan :attribute mestilah kurang atau sama dengan :value aksara.',
    ],
    'mac_address' => 'Medan :attribute mestilah alamat MAC yang sah.',
    'max' => [
        'array' => 'Medan :attribute tidak boleh mempunyai lebih daripada :max item.',
        'file' => 'Medan :attribute tidak boleh lebih besar daripada :max kilobait.',
        'numeric' => 'Medan :attribute tidak boleh lebih besar daripada :max.',
        'string' => 'Medan :attribute tidak boleh lebih besar daripada :max aksara.',
    ],
    'max_digits' => 'Medan :attribute tidak boleh mempunyai lebih daripada :max digit.',
    'mimes' => 'Medan :attribute mestilah fail jenis: :values.',
    'mimetypes' => 'Medan :attribute mestilah fail jenis: :values.',
    'min' => [
        'array' => 'Medan :attribute mesti mempunyai sekurang-kurangnya :min item.',
        'file' => 'Medan :attribute mestilah sekurang-kurangnya :min kilobait.',
        'numeric' => 'Medan :attribute mestilah sekurang-kurangnya :min.',
        'string' => 'Medan :attribute mestilah sekurang-kurangnya :min aksara.',
    ],
    'min_digits' => 'Medan :attribute mesti mempunyai sekurang-kurangnya :min digit.',
    'missing' => 'Medan :attribute mesti hilang.',
    'missing_if' => 'Medan :attribute mesti hilang apabila :other adalah :value.',
    'missing_unless' => 'Medan :attribute mesti hilang kecuali :other adalah :value.',
    'missing_with' => 'Medan :attribute mesti hilang apabila :values ada.',
    'missing_with_all' => 'Medan :attribute mesti hilang apabila :values ada.',
    'multiple_of' => 'Medan :attribute mestilah gandaan :value.',
    'not_in' => ':attribute yang dipilih tidak sah.',
    'not_regex' => 'Format medan :attribute tidak sah.',
    'numeric' => 'Medan :attribute mestilah nombor.',
    'password' => [
        'letters' => 'Medan :attribute mesti mengandungi sekurang-kurangnya satu huruf.',
        'mixed' => 'Medan :attribute mesti mengandungi sekurang-kurangnya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Medan :attribute mesti mengandungi sekurang-kurangnya satu nombor.',
        'symbols' => 'Medan :attribute mesti mengandungi sekurang-kurangnya satu simbol.',
        'uncompromised' => ':attribute yang diberikan telah muncul dalam kebocoran data. Sila pilih :attribute yang berbeza.',
    ],
    'present' => 'Medan :attribute mesti ada.',
    'present_if' => 'Medan :attribute mesti ada apabila :other adalah :value.',
    'present_unless' => 'Medan :attribute mesti ada kecuali :other adalah :value.',
    'present_with' => 'Medan :attribute mesti ada apabila :values ada.',
    'present_with_all' => 'Medan :attribute mesti ada apabila :values ada.',
    'prohibited' => 'Medan :attribute adalah dilarang.',
    'prohibited_if' => 'Medan :attribute adalah dilarang apabila :other adalah :value.',
    'prohibited_if_accepted' => 'Medan :attribute adalah dilarang apabila :other diterima.',
    'prohibited_if_declined' => 'Medan :attribute adalah dilarang apabila :other ditolak.',
    'prohibited_unless' => 'Medan :attribute adalah dilarang kecuali :other ada dalam :values.',
    'prohibits' => 'Medan :attribute melarang :other daripada hadir.',
    'regex' => 'Format medan :attribute tidak sah.',
    'required' => 'Medan :attribute diperlukan.',
    'required_array_keys' => 'Medan :attribute mesti mengandungi entri untuk: :values.',
    'required_if' => 'Medan :attribute diperlukan apabila :other adalah :value.',
    'required_if_accepted' => 'Medan :attribute diperlukan apabila :other diterima.',
    'required_if_declined' => 'Medan :attribute diperlukan apabila :other ditolak.',
    'required_unless' => 'Medan :attribute diperlukan kecuali :other ada dalam :values.',
    'required_with' => 'Medan :attribute diperlukan apabila :values ada.',
    'required_with_all' => 'Medan :attribute diperlukan apabila :values ada.',
    'required_without' => 'Medan :attribute diperlukan apabila :values tiada.',
    'required_without_all' => 'Medan :attribute diperlukan apabila tiada :values ada.',
    'same' => 'Medan :attribute mesti sepadan dengan :other.',
    'size' => [
        'array' => 'Medan :attribute mesti mengandungi :size item.',
        'file' => 'Medan :attribute mestilah :size kilobait.',
        'numeric' => 'Medan :attribute mestilah :size.',
        'string' => 'Medan :attribute mestilah :size aksara.',
    ],
    'starts_with' => 'Medan :attribute mesti bermula dengan salah satu daripada berikut: :values.',
    'string' => 'Medan :attribute mestilah rentetan.',
    'timezone' => 'Medan :attribute mestilah zon waktu yang sah.',
    'unique' => ':attribute telah diambil.',
    'uploaded' => ':attribute gagal dimuat naik.',
    'uppercase' => 'Medan :attribute mestilah huruf besar.',
    'url' => 'Medan :attribute mestilah URL yang sah.',
    'ulid' => 'Medan :attribute mestilah ULID yang sah.',
    'uuid' => 'Medan :attribute mestilah UUID yang sah.',

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
            'rule-name' => 'mesej-tersuai',
        ],
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

    'attributes' => [],

];
