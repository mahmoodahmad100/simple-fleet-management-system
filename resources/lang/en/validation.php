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

    'accepted' => ['message' => 'The :attribute must be accepted.', 'code' => 4101],
    'active_url' => ['message' => 'The :attribute is not a valid URL.', 'code' => 4102],
    'after' => ['message' => 'The :attribute must be a date after :date.', 'code' => 4103],
    'after_or_equal' => ['message' => 'The :attribute must be a date after or equal to :date.', 'code' => 4104],
    'alpha' => ['message' => 'The :attribute may only contain letters.', 'code' => 4105],
    'alpha_dash' => [
        'message' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
        'code' => 4106
    ],
    'alpha_num' => ['message' => 'The :attribute may only contain letters and numbers.', 'code' => 4107],
    'array' => ['message' => 'The :attribute must be an array.', 'code' => 4108],
    'before' => ['message' => 'The :attribute must be a date before :date.', 'code' => 4109],
    'before_or_equal' => ['message' => 'The :attribute must be a date before or equal to :date.', 'code' => 4110],
    'between' => [
        'numeric' => ['message' => 'The :attribute must be between :min and :max.', 'code' => 4111],
        'file' => ['message' => 'The :attribute must be between :min and :max kilobytes.', 'code' => 4112],
        'string' => ['message' => 'The :attribute must be between :min and :max characters.', 'code' => 4113],
        'array' => ['message' => 'The :attribute must have between :min and :max items.', 'code' => 4114],
    ],
    'boolean' => ['message' => 'The :attribute field must be true or false.', 'code' => 4115],
    'confirmed' => ['message' => 'The :attribute confirmation does not match.', 'code' => 4116],
    'date' => ['message' => 'The :attribute is not a valid date.', 'code' => 4117],
    'date_equals' => ['message' => 'The :attribute must be a date equal to :date.', 'code' => 4118],
    'date_format' => ['message' => 'The :attribute does not match the format :format.', 'code' => 4119],
    'different' => ['message' => 'The :attribute and :other must be different.', 'code' => 4120],
    'digits' => ['message' => 'The :attribute must be :digits digits.', 'code' => 4121],
    'digits_between' => ['message' => 'The :attribute must be between :min and :max digits.', 'code' => 4122],
    'dimensions' => ['message' => 'The :attribute has invalid image dimensions.', 'code' => 4123],
    'distinct' => ['message' => 'The :attribute field has a duplicate value.', 'code' => 4124],
    'email' => ['message' => 'The :attribute must be a valid email address.', 'code' => 4125],
    'ends_with' => ['message' => 'The :attribute must end with one of the following: :values.', 'code' => 4126],
    'exists' => ['message' => 'The selected :attribute is invalid.', 'code' => 4127],
    'file' => ['message' => 'The :attribute must be a file.', 'code' => 4128],
    'filled' => ['message' => 'The :attribute field must have a value.', 'code' => 4129],
    'gt' => [
        'numeric' => ['message' => 'The :attribute must be greater than :value.', 'code' => 4130],
        'file' => ['message' => 'The :attribute must be greater than :value kilobytes.', 'code' => 4131],
        'string' => ['message' => 'The :attribute must be greater than :value characters.', 'code' => 4132],
        'array' => ['message' => 'The :attribute must have more than :value items.', 'code' => 4133],
    ],
    'gte' => [
        'numeric' => ['message' => 'The :attribute must be greater than or equal :value.', 'code' => 4134],
        'file' => ['message' => 'The :attribute must be greater than or equal :value kilobytes.', 'code' => 4135],
        'string' => ['message' => 'The :attribute must be greater than or equal :value characters.', 'code' => 4136],
        'array' => ['message' => 'The :attribute must have :value items or more.', 'code' => 4137],
    ],
    'image' => ['message' => 'The :attribute must be an image.', 'code' => 4138],
    'in' => ['message' => 'The selected :attribute is invalid.', 'code' => 4139],
    'in_array' => ['message' => 'The :attribute field does not exist in :other.', 'code' => 4140],
    'integer' => ['message' => 'The :attribute must be an integer.', 'code' => 4141],
    'ip' => ['message' => 'The :attribute must be a valid IP address.', 'code' => 4142],
    'ipv4' => ['message' => 'The :attribute must be a valid IPv4 address.', 'code' => 4143],
    'ipv6' => ['message' => 'The :attribute must be a valid IPv6 address.', 'code' => 4144],
    'json' => ['message' => 'The :attribute must be a valid JSON string.', 'code' => 4145],
    'lt' => [
        'numeric' => ['message' => 'The :attribute must be less than :value.', 'code' => 4146],
        'file' => ['message' => 'The :attribute must be less than :value kilobytes.', 'code' => 4147],
        'string' => ['message' => 'The :attribute must be less than :value characters.', 'code' => 4148],
        'array' => ['message' => 'The :attribute must have less than :value items.', 'code' => 4149],
    ],
    'lte' => [
        'numeric' => ['message' => 'The :attribute must be less than or equal :value.', 'code' => 4150],
        'file' => ['message' => 'The :attribute must be less than or equal :value kilobytes.', 'code' => 4151],
        'string' => ['message' => 'The :attribute must be less than or equal :value characters.', 'code' => 4152],
        'array' => ['message' => 'The :attribute must not have more than :value items.', 'code' => 4153],
    ],
    'max' => [
        'numeric' => ['message' => 'The :attribute may not be greater than :max.', 'code' => 4154],
        'file' => ['message' => 'The :attribute may not be greater than :max kilobytes.', 'code' => 4155],
        'string' => ['message' => 'The :attribute may not be greater than :max characters.', 'code' => 4156],
        'array' => ['message' => 'The :attribute may not have more than :max items.', 'code' => 4157],
    ],
    'mimes' => ['message' => 'The :attribute must be a file of type: :values.', 'code' => 4158],
    'mimetypes' => ['message' => 'The :attribute must be a file of type: :values.', 'code' => 4159],
    'min' => [
        'numeric' => ['message' => 'The :attribute must be at least :min.', 'code' => 4160],
        'file' => ['message' => 'The :attribute must be at least :min kilobytes.', 'code' => 4161],
        'string' => ['message' => 'The :attribute must be at least :min characters.', 'code' => 4162],
        'array' => ['message' => 'The :attribute must have at least :min items.', 'code' => 4163],
    ],
    'multiple_of' => ['message' => 'The :attribute must be a multiple of :value.', 'code' => 4164],
    'not_in' => ['message' => 'The selected :attribute is invalid.', 'code' => 4165],
    'not_regex' => ['message' => 'The :attribute format is invalid.', 'code' => 4166],
    'numeric' => ['message' => 'The :attribute must be a number.', 'code' => 4167],
    'password' => ['message' => 'The password is incorrect.', 'code' => 4168],
    'present' => ['message' => 'The :attribute field must be present.', 'code' => 4169],
    'regex' => ['message' => 'The :attribute format is invalid.', 'code' => 4170],
    'required' => ['message' => 'The :attribute field is required.', 'code' => 4171],
    'required_if' => ['message' => 'The :attribute field is required when :other is :value.', 'code' => 4172],
    'required_unless' => [
        'message' => 'The :attribute field is required unless :other is in :values.',
        'code' => 4173
    ],
    'required_with' => ['message' => 'The :attribute field is required when :values is present.', 'code' => 4174],
    'required_with_all' => ['message' => 'The :attribute field is required when :values are present.', 'code' => 4175],
    'required_without' => [
        'message' => 'The :attribute field is required when :values is not present.',
        'code' => 4176
    ],
    'required_without_all' => [
        'message' => 'The :attribute field is required when none of :values are present.',
        'code' => 4177
    ],
    'prohibited' => ['message' => 'The :attribute field is prohibited.', 'code' => 4178],
    'prohibited_if' => ['message' => 'The :attribute field is prohibited when :other is :value.', 'code' => 4179],
    'prohibited_unless' => [
        'message' => 'The :attribute field is prohibited unless :other is in :values.',
        'code' => 4180
    ],
    'same' => ['message' => 'The :attribute and :other must match.', 'code' => 4181],
    'size' => [
        'numeric' => ['message' => 'The :attribute must be :size.', 'code' => 4182],
        'file' => ['message' => 'The :attribute must be :size kilobytes.', 'code' => 4183],
        'string' => ['message' => 'The :attribute must be :size characters.', 'code' => 4184],
        'array' => ['message' => 'The :attribute must contain :size items.', 'code' => 4185],
    ],
    'starts_with' => ['message' => 'The :attribute must start with one of the following: :values.', 'code' => 4186],
    'string' => ['message' => 'The :attribute must be a string.', 'code' => 4187],
    'timezone' => ['message' => 'The :attribute must be a valid zone.', 'code' => 4188],
    'unique' => ['message' => 'The :attribute has already been taken.', 'code' => 4189],
    'uploaded' => ['message' => 'The :attribute failed to upload.', 'code' => 4190],
    'url' => ['message' => 'The :attribute format is invalid.', 'code' => 4191],
    'uuid' => ['message' => 'The :attribute must be a valid UUID.', 'code' => 4192],

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

    'attributes' => [],

];