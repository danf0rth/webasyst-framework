<?php

/**
 * Class waSetPasswordForm
 *
 * Abstract class for set password form
 *
 * Set password form shows second in recover password process
 */
abstract class waSetPasswordForm extends waLoginFormRenderer
{
    /**
     * @var waAuthConfig
     */
    protected $auth_config;

    public function renderField($field_id, $params = array())
    {
        // Render directly in form template
        return '';
    }
}
