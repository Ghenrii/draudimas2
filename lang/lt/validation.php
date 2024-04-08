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

    'accepted' => 'Laukas :attribute turi būti priimtas.',
    'accepted_if' => 'Laukas :attribute turi būti priimtas, kai :other yra :value.',
    'active_url' => 'Laukas :attribute turi būti galiojantis internetinis adresas.',
    'after' => 'Laukas :attribute turi būti data po :date.',
    'after_or_equal' => 'Laukas :attribute turi būti data po arba lygi :date.',
    'alpha' => 'Laukas :attribute gali sudaryti tik raidės.',
    'alpha_dash' => 'Laukas :attribute gali sudaryti tik raidės, skaičiai, brūkšniai ir pabraukimai.',
    'alpha_num' => 'Laukas :attribute gali sudaryti tik raidės ir skaičiai.',
    'array' => 'Laukas :attribute turi būti masyvas.',
    'ascii' => 'Laukas :attribute gali sudaryti tik ASCII simboliai.',
    'before' => 'Laukas :attribute turi būti data prieš :date.',
    'before_or_equal' => 'Laukas :attribute turi būti data prieš arba lygi :date.',
    'between' => [
        'array' => 'Laukas :attribute turi turėti nuo :min iki :max elementų.',
        'file' => 'Laukas :attribute turi būti nuo :min iki :max kilobaitų.',
        'numeric' => 'Laukas :attribute turi būti nuo :min iki :max.',
        'string' => 'Laukas :attribute turi būti nuo :min iki :max simbolių.',
    ],
    'boolean' => 'Laukas :attribute turi būti tiesa arba melas.',
    'can' => 'Laukas :attribute turi būti autorizuotas.',
    'confirmed' => 'Lauko :attribute patvirtinimas nesutampa.',
    'current_password' => 'Neteisingas slaptažodis.',
    'date' => 'Laukas :attribute nėra galiojanti data.',
    'date_equals' => 'Laukas :attribute turi būti data lygi :date.',
    'date_format' => 'Laukas :attribute neatitinka formato :format.',
    'decimal' => 'Laukas :attribute turi turėti :decimal skaičių po kablelio.',
    'declined' => 'Laukas :attribute turi būti atmestas.',
    'declined_if' => 'Laukas :attribute turi būti atmestas, kai :other yra :value.',
    'different' => 'Laukas :attribute ir :other turi skirtis.',
    'digits' => 'Laukas :attribute turi būti sudarytas iš :digits skaitmenų.',
    'digits_between' => 'Laukas :attribute turi būti nuo :min iki :max skaitmenų.',
    'dimensions' => 'Lauke :attribute įkeltas paveikslėlis neturi tinkamų matmenų.',
    'distinct' => 'Laukas :attribute turi dubliuojančią vertę.',
    'doesnt_end_with' => 'Laukas :attribute turi baigtis vienu iš šių: :values.',
    'doesnt_start_with' => 'Laukas :attribute turi prasidėti vienu iš šių: :values.',
    'email' => 'Lauko :attribute formato nėra teisingas.',
    'ends_with' => 'Laukas :attribute turi baigtis vienu iš šių: :values.',
    'enum' => 'Pasirinktas :attribute yra neteisingas.',
    'exists' => 'Pasirinktas :attribute yra neteisingas.',
    'extensions' => 'Laukas :attribute turi būti vienas iš šių formatus: :values.',
    'file' => 'Laukas :attribute turi būti failas.',
    'filled' => 'Laukas :attribute turi turėti reikšmę.',
    'gt' => [
        'array' => 'Laukas :attribute turi turėti daugiau nei :value elementų.',
        'file' => 'Laukas :attribute turi būti didesnis nei :value kilobaitų.',
        'numeric' => 'Laukas :attribute turi būti didesnis nei :value.',
        'string' => 'Laukas :attribute turi būti ilgesnis nei :value simboliai.',
    ],
    'gte' => [
        'array' => 'Laukas :attribute turi turėti :value elementus arba daugiau.',
        'file' => 'Laukas :attribute turi būti didesnis arba lygus :value kilobaitų.',
        'numeric' => 'Laukas :attribute turi būti didesnis arba lygus :value.',
        'string' => 'Laukas :attribute turi būti ilgesnis arba lygus :value simboliams.',
    ],
    'hex_color' => 'Lauko :attribute formatas neteisingas.',
    'image' => 'Laukas :attribute turi būti paveikslėlis.',
    'in' => 'Pasirinktas :attribute yra neteisingas.',
    'in_array' => 'Laukas :attribute neegzistuoja :other.',
    'integer' => 'Laukas :attribute turi būti sveikasis skaičius.',
    'ip' => 'Laukas :attribute turi būti galiojantis IP adresas.',
    'ipv4' => 'Laukas :attribute turi būti galiojantis IPv4 adresas.',
    'ipv6' => 'Laukas :attribute turi būti galiojantis IPv6 adresas.',
    'json' => 'Laukas :attribute turi būti JSON tekstas.',
    'lowercase' => 'Laukas :attribute turi būti mažosiomis raidėmis.',
    'lt' => [
        'array' => 'Laukas :attribute turi turėti mažiau nei :value elementų.',
        'file' => 'Laukas :attribute turi būti mažesnis nei :value kilobaitai.',
        'numeric' => 'Laukas :attribute turi būti mažesnis nei :value.',
        'string' => 'Laukas :attribute turi būti trumpesnis nei :value simboliai.',
    ],
    'lte' => [
        'array' => 'Laukas :attribute turi turėti :value elementus arba mažiau.',
        'file' => 'Laukas :attribute turi būti mažesnis arba lygus :value kilobaitams.',
        'numeric' => 'Laukas :attribute turi būti mažesnis arba lygus :value.',
        'string' => 'Laukas :attribute turi būti trumpesnis arba lygus :value simboliams.',
    ],
    'mac_address' => 'Laukas :attribute turi būti galiojantis MAC adresas.',
    'max' => [
        'array' => 'Laukas :attribute turi turėti ne daugiau nei :max elementus.',
        'file' => 'Laukas :attribute turi būti ne didesnis nei :max kilobaitai.',
        'numeric' => 'Laukas :attribute turi būti ne didesnis nei :max.',
        'string' => 'Laukas :attribute turi būti ne ilgesnis nei :max simboliai.',
    ],
    'max_digits' => 'Lauko :attribute vertė neturi viršyti :max skaitmenų.',
    'mimes' => 'Laukas :attribute turi būti failas formato: :values.',
    'mimetypes' => 'Laukas :attribute turi būti failas formato: :values.',
    'min' => [
        'array' => 'Laukas :attribute turi turėti bent :min elementus.',
        'file' => 'Laukas :attribute turi būti bent :min kilobaitai.',
        'numeric' => 'Laukas :attribute turi būti bent :min.',
        'string' => 'Laukas :attribute turi būti bent :min simboliai.',
    ],
    'min_digits' => 'Laukas :attribute turi turėti bent :min skaitmenų.',
    'missing' => 'Laukas :attribute privalomas.',
    'missing_if' => 'Laukas :attribute privalomas, kai :other yra :value.',
    'missing_unless' => 'Laukas :attribute privalomas, nebent :other yra :value.',
    'missing_with' => 'Laukas :attribute privalomas, kai yra :values.',
    'missing_with_all' => 'Laukas :attribute privalomas, kai yra :values.',
    'multiple_of' => 'Laukas :attribute turi būti keliamasis :value.',
    'not_in' => 'Pasirinktas :attribute yra neteisingas.',
    'not_regex' => 'Lauko :attribute formatas neteisingas.',
    'numeric' => 'Laukas :attribute turi būti skaičius.',
    'password' => [
        'letters' => 'Laukas :attribute turi turėti bent vieną raidę.',
        'mixed' => 'Laukas :attribute turi turėti bent vieną didžiąją ir mažąją raidę.',
        'numbers' => 'Laukas :attribute turi turėti bent vieną skaičių.',
        'symbols' => 'Laukas :attribute turi turėti bent vieną simbolį.',
        'uncompromised' => 'Duotas :attribute pasirodė prieš data nuotraukoje. Prašome pasirinkti kitą :attribute.',
    ],
    'present' => 'Laukas :attribute turi būti.',
    'present_if' => 'Laukas :attribute turi būti, kai :other yra :value.',
    'present_unless' => 'Laukas :attribute turi būti, nebent :other yra :value.',
    'present_with' => 'Laukas :attribute turi būti, kai :values yra.',
    'present_with_all' => 'Laukas :attribute turi būti, kai :values yra.',
    'prohibited' => 'Laukas :attribute yra draudžiamas.',
    'prohibited_if' => 'Laukas :attribute yra draudžiamas, kai :other yra :value.',
    'prohibited_unless' => 'Laukas :attribute yra draudžiamas, nebent :other yra :values.',
    'prohibits' => 'Laukas :attribute draudžia :other būti.',
    'regex' => 'Lauko :attribute formatas neteisingas.',
    'required' => 'Laukas :attribute privalomas.',
    'required_array_keys' => 'Laukas :attribute turi turėti įrašus: :values.',
    'required_if' => 'Laukas :attribute privalomas, kai :other yra :value.',
    'required_if_accepted' => 'Laukas :attribute privalomas, kai :other yra priimtas.',
    'required_unless' => 'Laukas :attribute privalomas, nebent :other yra :values.',
    'required_with' => 'Laukas :attribute privalomas, kai yra :values.',
    'required_with_all' => 'Laukas :attribute privalomas, kai yra :values.',
    'required_without' => 'Laukas :attribute privalomas, kai nėra :values.',
    'required_without_all' => 'Laukas :attribute privalomas, kai nėra nei vieno :values.',
    'same' => 'Laukas :attribute ir :other turi sutapti.',
    'size' => [
        'array' => 'Laukas :attribute turi turėti :size elementus.',
        'file' => 'Laukas :attribute turi būti :size kilobaitų.',
        'numeric' => 'Laukas :attribute turi būti :size.',
        'string' => 'Laukas :attribute turi būti :size simboliai.',
    ],
    'starts_with' => 'Laukas :attribute turi prasidėti vienu iš šių: :values.',
    'string' => 'Laukas :attribute turi būti tekstas.',
    'timezone' => 'Laukas :attribute turi būti galiojanti laiko juosta.',
    'unique' => 'Lauko :attribute reikšmė jau paimta.',
    'uploaded' => 'Lauko :attribute nepavyko įkelti.',
    'uppercase' => 'Laukas :attribute turi būti didžiosiomis raidėmis.',
    'url' => 'Laukas :attribute formato nėra galiojantis.',
    'ulid' => 'Laukas :attribute turi būti galiojantis ULID.',
    'uuid' => 'Laukas :attribute turi būti galiojantis UUID.',
    

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
        'name' => 'vardas',
        'surname' => 'pavardė',
        'phone' => 'telefonas',
        'email' => 'paštas',
        'adress' => 'adresas',
        'password' => 'slaptažodis',
        'reg_number' => 'registracijos numeris',
        'brand' => 'markė',
        'model' => 'modelis',
        'owner_id' => 'savininko id',
    ],

];
