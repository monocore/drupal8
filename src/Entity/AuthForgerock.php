<?php

namespace Drupal\fr_auth\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Auth forgerock entity.
 *
 * @ConfigEntityType(
 *   id = "auth_forgerock",
 *   label = @Translation("Auth forgerock"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\fr_auth\AuthForgerockListBuilder",
 *     "form" = {
 *       "add" = "Drupal\fr_auth\Form\AuthForgerockForm",
 *       "edit" = "Drupal\fr_auth\Form\AuthForgerockForm",
 *       "delete" = "Drupal\fr_auth\Form\AuthForgerockDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\fr_auth\AuthForgerockHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "auth_forgerock",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/forgerock/auth_forgerock/{auth_forgerock}",
 *     "add-form" = "/admin/forgerock/auth_forgerock/add",
 *     "edit-form" = "/admin/forgerock/auth_forgerock/{auth_forgerock}/edit",
 *     "delete-form" = "/admin/forgerock/auth_forgerock/{auth_forgerock}/delete",
 *     "collection" = "/admin/forgerock/auth_forgerock"
 *   }
 * )
 */
class AuthForgerock extends ConfigEntityBase implements AuthForgerockInterface {

  /**
   * The Auth forgerock ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Auth forgerock label.
   *
   * @var string
   */
  protected $label;

}
