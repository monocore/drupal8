<?php

namespace Drupal\fr_auth\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AuthForgerockForm.
 */
class AuthForgerockForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $auth_forgerock = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $auth_forgerock->label(),
      '#description' => $this->t("Label for the Auth forgerock."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $auth_forgerock->id(),
      '#machine_name' => [
        'exists' => '\Drupal\fr_auth\Entity\AuthForgerock::load',
      ],
      '#disabled' => !$auth_forgerock->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $auth_forgerock = $this->entity;
    $status = $auth_forgerock->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Auth forgerock.', [
          '%label' => $auth_forgerock->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Auth forgerock.', [
          '%label' => $auth_forgerock->label(),
        ]));
    }
    $form_state->setRedirectUrl($auth_forgerock->toUrl('collection'));
  }

}
