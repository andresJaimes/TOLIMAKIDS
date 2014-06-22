<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/api')) {
            // api_homepage
            if (rtrim($pathinfo, '/') === '/api') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_homepage');
                }

                return array (  '_controller' => 'ItoApiBundle:Default:index',  '_route' => 'api_homepage',);
            }

            if (0 === strpos($pathinfo, '/api/places')) {
                // places
                if (rtrim($pathinfo, '/') === '/api/places') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'places');
                    }

                    return array (  '_controller' => 'ItoSoftware\\Api\\ApiBundle\\Controller\\PlacesController::indexAction',  '_route' => 'places',);
                }

                // places_show
                if (preg_match('#^/api/places/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'places_show')), array (  '_controller' => 'ItoSoftware\\Api\\ApiBundle\\Controller\\PlacesController::showAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/municipality')) {
                // municipio
                if (rtrim($pathinfo, '/') === '/api/municipality') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_municipio;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'municipio');
                    }

                    return array (  '_controller' => 'ItoSoftware\\Api\\ApiBundle\\Controller\\MunicipalityController::indexAction',  '_route' => 'municipio',);
                }
                not_municipio:

                // municipio_show
                if (preg_match('#^/api/municipality/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_municipio_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipio_show')), array (  '_controller' => 'ItoSoftware\\Api\\ApiBundle\\Controller\\MunicipalityController::ShowAction',));
                }
                not_municipio_show:

            }

            if (0 === strpos($pathinfo, '/api/activity')) {
                // servicio
                if (rtrim($pathinfo, '/') === '/api/activity') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicio;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'servicio');
                    }

                    return array (  '_controller' => 'ItoSoftware\\Api\\ApiBundle\\Controller\\ActivityController::indexAction',  '_route' => 'servicio',);
                }
                not_servicio:

                // servicio_show
                if (preg_match('#^/api/activity/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicio_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicio_show')), array (  '_controller' => 'ItoSoftware\\Api\\ApiBundle\\Controller\\ActivityController::showAction',));
                }
                not_servicio_show:

            }

        }

        if (0 === strpos($pathinfo, '/index')) {
            // front_frontend_homepage
            if (rtrim($pathinfo, '/') === '/index') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_frontend_homepage');
                }

                return array (  '_controller' => 'ItoSoftware\\Front\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_frontend_homepage',);
            }

            // front_frontend_lugar_detalle
            if (0 === strpos($pathinfo, '/index/places/detalle') && preg_match('#^/index/places/detalle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_frontend_lugar_detalle')), array (  '_controller' => 'ItoSoftware\\Front\\FrontendBundle\\Controller\\PlacesController::detalleLugarAction',));
            }

            // front_frontend_actividad_detalle
            if (0 === strpos($pathinfo, '/index/activity/detalle') && preg_match('#^/index/activity/detalle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_frontend_actividad_detalle')), array (  '_controller' => 'ItoSoftware\\Front\\FrontendBundle\\Controller\\ActivityController::detalleActividadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ito_admin_homepage
            if (preg_match('#^/admin/(?P<_locale>en|es|fr|)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ito_admin_homepage');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ito_admin_homepage')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
            }

            // redirect_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\DefaultController::redirectAdminAction',  '_route' => 'redirect_admin',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        // fos_user_profile_edit
        if ($pathinfo === '/profile/edit') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_user_profile_show
        if ($pathinfo === '/user/password-recovery') {
            return array (  '_controller' => 'ItoSoftware\\Components\\UserBundle\\Controller\\DefaultController::passwordRecoveryAction',  '_route' => 'fos_user_profile_show',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (preg_match('#^/admin/(?P<_locale>en|es|fr|)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_redirect')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_locale' => 'en',));
            }

            // sonata_admin_dashboard
            if (preg_match('#^/admin/(?P<_locale>en|es|fr|)/dashboard$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_dashboard')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_locale' => 'en',));
            }

            // sonata_admin_retrieve_form_element
            if (preg_match('#^/admin/(?P<_locale>en|es|fr|)/core/get\\-form\\-field\\-element$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_retrieve_form_element')), array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_locale' => 'en',));
            }

            // sonata_admin_append_form_element
            if (preg_match('#^/admin/(?P<_locale>en|es|fr|)/core/append\\-form\\-field\\-element$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_append_form_element')), array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_locale' => 'en',));
            }

            // sonata_admin_short_object_information
            if (preg_match('#^/admin/(?P<_locale>en|es|fr|)/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',  '_locale' => 'en',));
            }

            // sonata_admin_set_object_field_value
            if (preg_match('#^/admin/(?P<_locale>en|es|fr|)/core/set\\-object\\-field\\-value$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_set_object_field_value')), array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_locale' => 'en',));
            }

            // sonata_admin_search
            if (preg_match('#^/admin/(?P<_locale>en|es|fr|)/search$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_search')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_locale' => 'en',));
            }

            // admin_components_model_activity_list
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/activity/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_activity_list')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\ActivityAdminController::listAction',  '_sonata_admin' => 'sonata.activity.admin.activity',  '_sonata_name' => 'admin_components_model_activity_list',));
            }

            // admin_components_model_activity_create
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/activity/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_activity_create')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\ActivityAdminController::createAction',  '_sonata_admin' => 'sonata.activity.admin.activity',  '_sonata_name' => 'admin_components_model_activity_create',));
            }

            // admin_components_model_activity_batch
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/activity/batch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_activity_batch')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\ActivityAdminController::batchAction',  '_sonata_admin' => 'sonata.activity.admin.activity',  '_sonata_name' => 'admin_components_model_activity_batch',));
            }

            // admin_components_model_activity_edit
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/activity/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_activity_edit')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\ActivityAdminController::editAction',  '_sonata_admin' => 'sonata.activity.admin.activity',  '_sonata_name' => 'admin_components_model_activity_edit',));
            }

            // admin_components_model_activity_delete
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/activity/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_activity_delete')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\ActivityAdminController::deleteAction',  '_sonata_admin' => 'sonata.activity.admin.activity',  '_sonata_name' => 'admin_components_model_activity_delete',));
            }

            // admin_components_model_activity_show
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/activity/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_activity_show')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\ActivityAdminController::showAction',  '_sonata_admin' => 'sonata.activity.admin.activity',  '_sonata_name' => 'admin_components_model_activity_show',));
            }

            // admin_components_model_activity_export
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/activity/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_activity_export')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\ActivityAdminController::exportAction',  '_sonata_admin' => 'sonata.activity.admin.activity',  '_sonata_name' => 'admin_components_model_activity_export',));
            }

            // admin_components_model_activity_galery
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/activity/galery$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_activity_galery')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\ActivityAdminController::galeryAction',  '_sonata_admin' => 'sonata.activity.admin.activity',  '_sonata_name' => 'admin_components_model_activity_galery',));
            }

            // admin_components_model_municipality_list
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/municipality/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_municipality_list')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\MunicipalityAdminController::listAction',  '_sonata_admin' => 'sonata.municipality.admin.municipality',  '_sonata_name' => 'admin_components_model_municipality_list',));
            }

            // admin_components_model_municipality_create
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/municipality/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_municipality_create')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\MunicipalityAdminController::createAction',  '_sonata_admin' => 'sonata.municipality.admin.municipality',  '_sonata_name' => 'admin_components_model_municipality_create',));
            }

            // admin_components_model_municipality_batch
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/municipality/batch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_municipality_batch')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\MunicipalityAdminController::batchAction',  '_sonata_admin' => 'sonata.municipality.admin.municipality',  '_sonata_name' => 'admin_components_model_municipality_batch',));
            }

            // admin_components_model_municipality_edit
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/municipality/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_municipality_edit')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\MunicipalityAdminController::editAction',  '_sonata_admin' => 'sonata.municipality.admin.municipality',  '_sonata_name' => 'admin_components_model_municipality_edit',));
            }

            // admin_components_model_municipality_delete
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/municipality/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_municipality_delete')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\MunicipalityAdminController::deleteAction',  '_sonata_admin' => 'sonata.municipality.admin.municipality',  '_sonata_name' => 'admin_components_model_municipality_delete',));
            }

            // admin_components_model_municipality_show
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/municipality/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_municipality_show')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\MunicipalityAdminController::showAction',  '_sonata_admin' => 'sonata.municipality.admin.municipality',  '_sonata_name' => 'admin_components_model_municipality_show',));
            }

            // admin_components_model_municipality_export
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/municipality/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_municipality_export')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\MunicipalityAdminController::exportAction',  '_sonata_admin' => 'sonata.municipality.admin.municipality',  '_sonata_name' => 'admin_components_model_municipality_export',));
            }

            // admin_components_model_places_list
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/places/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_places_list')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\PlacesAdminController::listAction',  '_sonata_admin' => 'sonata.places.admin',  '_sonata_name' => 'admin_components_model_places_list',));
            }

            // admin_components_model_places_create
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/places/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_places_create')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\PlacesAdminController::createAction',  '_sonata_admin' => 'sonata.places.admin',  '_sonata_name' => 'admin_components_model_places_create',));
            }

            // admin_components_model_places_batch
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/places/batch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_places_batch')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\PlacesAdminController::batchAction',  '_sonata_admin' => 'sonata.places.admin',  '_sonata_name' => 'admin_components_model_places_batch',));
            }

            // admin_components_model_places_edit
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/places/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_places_edit')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\PlacesAdminController::editAction',  '_sonata_admin' => 'sonata.places.admin',  '_sonata_name' => 'admin_components_model_places_edit',));
            }

            // admin_components_model_places_delete
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/places/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_places_delete')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\PlacesAdminController::deleteAction',  '_sonata_admin' => 'sonata.places.admin',  '_sonata_name' => 'admin_components_model_places_delete',));
            }

            // admin_components_model_places_show
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/places/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_places_show')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\PlacesAdminController::showAction',  '_sonata_admin' => 'sonata.places.admin',  '_sonata_name' => 'admin_components_model_places_show',));
            }

            // admin_components_model_places_export
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/places/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_places_export')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\PlacesAdminController::exportAction',  '_sonata_admin' => 'sonata.places.admin',  '_sonata_name' => 'admin_components_model_places_export',));
            }

            // admin_components_model_galery_list
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/galery/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_galery_list')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\GaleryAdminController::listAction',  '_sonata_admin' => 'sonata.galery.admin.galery',  '_sonata_name' => 'admin_components_model_galery_list',));
            }

            // admin_components_model_galery_create
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/galery/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_galery_create')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\GaleryAdminController::createAction',  '_sonata_admin' => 'sonata.galery.admin.galery',  '_sonata_name' => 'admin_components_model_galery_create',));
            }

            // admin_components_model_galery_batch
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/galery/batch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_galery_batch')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\GaleryAdminController::batchAction',  '_sonata_admin' => 'sonata.galery.admin.galery',  '_sonata_name' => 'admin_components_model_galery_batch',));
            }

            // admin_components_model_galery_edit
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/galery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_galery_edit')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\GaleryAdminController::editAction',  '_sonata_admin' => 'sonata.galery.admin.galery',  '_sonata_name' => 'admin_components_model_galery_edit',));
            }

            // admin_components_model_galery_delete
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/galery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_galery_delete')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\GaleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.galery.admin.galery',  '_sonata_name' => 'admin_components_model_galery_delete',));
            }

            // admin_components_model_galery_show
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/galery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_galery_show')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\GaleryAdminController::showAction',  '_sonata_admin' => 'sonata.galery.admin.galery',  '_sonata_name' => 'admin_components_model_galery_show',));
            }

            // admin_components_model_galery_export
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/galery/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_galery_export')), array (  '_controller' => 'ItoSoftware\\Components\\AdminBundle\\Controller\\GaleryAdminController::exportAction',  '_sonata_admin' => 'sonata.galery.admin.galery',  '_sonata_name' => 'admin_components_model_galery_export',));
            }

            // admin_components_model_user_list
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/user/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_user_list')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_components_model_user_list',));
            }

            // admin_components_model_user_create
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/user/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_user_create')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_components_model_user_create',));
            }

            // admin_components_model_user_batch
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/user/batch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_user_batch')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_components_model_user_batch',));
            }

            // admin_components_model_user_edit
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_components_model_user_edit',));
            }

            // admin_components_model_user_delete
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_components_model_user_delete',));
            }

            // admin_components_model_user_show
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_components_model_user_show',));
            }

            // admin_components_model_user_export
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/user/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_user_export')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_components_model_user_export',));
            }

            // admin_components_model_group_list
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/group/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_group_list')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_components_model_group_list',));
            }

            // admin_components_model_group_create
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/group/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_group_create')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_components_model_group_create',));
            }

            // admin_components_model_group_batch
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/group/batch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_group_batch')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_components_model_group_batch',));
            }

            // admin_components_model_group_edit
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_components_model_group_edit',));
            }

            // admin_components_model_group_delete
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_components_model_group_delete',));
            }

            // admin_components_model_group_show
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_components_model_group_show',));
            }

            // admin_components_model_group_export
            if (preg_match('#^/admin/(?P<_locale>[^/]++)/components/model/group/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_components_model_group_export')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_components_model_group_export',));
            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

        }

        // hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/connect') && preg_match('#^/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
        }

        // hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/loginface') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
        }

        // facebook_login
        if ($pathinfo === '/checkfacebook') {
            return array('_route' => 'facebook_login');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
