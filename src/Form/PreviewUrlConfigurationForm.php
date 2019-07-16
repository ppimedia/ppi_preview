<?php

namespace Drupal\ppi_preview\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
* Configuration form definition for the preview generation url.
*/
class PreviewUrlConfigurationForm extends ConfigFormBase {
  /**
    * {@inheritdoc}
    */
  protected function getEditableConfigNames() {
    return ['ppi_preview.settings'];
  }

  /**
    * {@inheritdoc}
    */
  public function getFormId() {
    return 'preview_url_form';
  }

  /**
    * {@inheritdoc}
    */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('ppi_preview.settings');
    $form['preview_url'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Preview Url'),
      '#description' => $this->t('This is the base url to get the preview image from'),
      '#default_value' => $config->get('preview_url'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
    * {@inheritdoc}
    */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('ppi_preview.settings')->set('preview_url', $form_state->getValue('preview_url'))->save();
    parent::submitForm($form, $form_state);
  }
}
