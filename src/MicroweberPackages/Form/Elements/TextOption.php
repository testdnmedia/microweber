<?php

namespace MicroweberPackages\Form\Elements;

class TextOption extends Text
{
    protected $optionKey;
    protected $optionGroup;

    public function __construct($optionKey, $optionGroup) {

        $this->optionKey = $optionKey;
        $this->optionGroup = $optionGroup;

        $this->setName($optionKey);
        $this->setAttribute('option-group', $optionGroup);

        $model = \MicroweberPackages\Option\Models\ModuleOption::where('option_key', $this->optionKey)->where('option_group', $this->optionGroup)->first();
        if ($model) {
            $this->value($model->option_value);
        }
    }
}
