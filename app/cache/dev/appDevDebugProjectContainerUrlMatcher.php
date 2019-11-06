<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/api/user')) {
            // api_user_register
            if (0 === strpos($pathinfo, '/api/user/register') && preg_match('#^/api/user/register/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_user_register;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_register')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_registerAction',));
            }
            not_api_user_register:

            // api_user_edit
            if (0 === strpos($pathinfo, '/api/user/edit') && preg_match('#^/api/user/edit/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_edit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_editAction',));
            }
            not_api_user_edit:

            // api_user_token
            if (0 === strpos($pathinfo, '/api/user/token') && preg_match('#^/api/user/token/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_user_token;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_token')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_tokenAction',));
            }
            not_api_user_token:

            // api_user_login
            if (0 === strpos($pathinfo, '/api/user/login') && preg_match('#^/api/user/login/(?P<username>[^/]++)/(?P<password>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_login;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_login');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_login')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_loginAction',));
            }
            not_api_user_login:

        }

        if (0 === strpos($pathinfo, '/users')) {
            // user_user_index
            if ($pathinfo === '/users/index.html') {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_user_index',);
            }

            // user_user_edit
            if (0 === strpos($pathinfo, '/users/edit') && preg_match('#^/users/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_edit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::editAction',));
            }

            if (0 === strpos($pathinfo, '/users/follow')) {
                // user_user_followers
                if (0 === strpos($pathinfo, '/users/followers') && preg_match('#^/users/followers/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_followers')), array (  '_controller' => 'UserBundle\\Controller\\UserController::followersAction',));
                }

                // user_user_followings
                if (0 === strpos($pathinfo, '/users/followings') && preg_match('#^/users/followings/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_followings')), array (  '_controller' => 'UserBundle\\Controller\\UserController::followingsAction',));
                }

            }

            // user_user_comments
            if (0 === strpos($pathinfo, '/users/comments') && preg_match('#^/users/comments/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_comments')), array (  '_controller' => 'UserBundle\\Controller\\UserController::commentsAction',));
            }

            if (0 === strpos($pathinfo, '/users/r')) {
                // user_user_ratings
                if (0 === strpos($pathinfo, '/users/ratings') && preg_match('#^/users/ratings/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_ratings')), array (  '_controller' => 'UserBundle\\Controller\\UserController::ratingsAction',));
                }

                // user_user_ringtones
                if (0 === strpos($pathinfo, '/users/ringtones') && preg_match('#^/users/ringtones/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_ringtones')), array (  '_controller' => 'UserBundle\\Controller\\UserController::ringtonesAction',));
                }

            }

            // user_user_view
            if (0 === strpos($pathinfo, '/users/view') && preg_match('#^/users/view/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_view')), array (  '_controller' => 'UserBundle\\Controller\\UserController::viewAction',));
            }

            // user_user_delete
            if (0 === strpos($pathinfo, '/users/delete') && preg_match('#^/users/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_delete')), array (  '_controller' => 'UserBundle\\Controller\\UserController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/user')) {
            // api_user_change_password
            if (0 === strpos($pathinfo, '/api/user/password') && preg_match('#^/api/user/password/(?P<id>[^/]++)/(?P<password>[^/]++)/(?P<new_password>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_change_password;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_change_password');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_change_password')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_change_passwordAction',));
            }
            not_api_user_change_password:

            // api_user_edit_name
            if (0 === strpos($pathinfo, '/api/user/name') && preg_match('#^/api/user/name/(?P<id>[^/]++)/(?P<name>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_edit_name;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_edit_name');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_edit_name')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_edit_nameAction',));
            }
            not_api_user_edit_name:

            // api_user_email
            if (0 === strpos($pathinfo, '/api/user/email') && preg_match('#^/api/user/email/(?P<email>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_email;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_email');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_email')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_emailAction',));
            }
            not_api_user_email:

            if (0 === strpos($pathinfo, '/api/user/re')) {
                // api_user_request
                if (0 === strpos($pathinfo, '/api/user/request') && preg_match('#^/api/user/request/(?P<key>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_user_request;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_request');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_request')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_requestAction',));
                }
                not_api_user_request:

                // api_user_reset
                if (0 === strpos($pathinfo, '/api/user/reset') && preg_match('#^/api/user/reset/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<new_password>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_user_reset;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_reset');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_resetAction',));
                }
                not_api_user_reset:

            }

            // api_user_check
            if (0 === strpos($pathinfo, '/api/user/check') && preg_match('#^/api/user/check/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_check;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_check');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_check')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_checkAction',));
            }
            not_api_user_check:

            // api_user_upload
            if (0 === strpos($pathinfo, '/api/user/upload') && preg_match('#^/api/user/upload/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_upload');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_upload')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_uploadAction',));
            }

            // api_user_get
            if (0 === strpos($pathinfo, '/api/user/get') && preg_match('#^/api/user/get/(?P<user>[^/]++)/(?P<me>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_get');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_get')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_getAction',));
            }

            if (0 === strpos($pathinfo, '/api/user/follow')) {
                // api_user_get_followers
                if (0 === strpos($pathinfo, '/api/user/followers') && preg_match('#^/api/user/followers/(?P<user>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_get_followers');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_get_followers')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_followersAction',));
                }

                // api_user_get_followings
                if (0 === strpos($pathinfo, '/api/user/followings') && preg_match('#^/api/user/followings/(?P<user>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_get_followings');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_get_followings')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_followingsAction',));
                }

                // api_user_follow
                if (preg_match('#^/api/user/follow/(?P<user>[^/]++)/(?P<follower>[^/]++)/(?P<key_>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_follow');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_follow')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_followAction',));
                }

                // api_user_get_followingstop
                if (0 === strpos($pathinfo, '/api/user/followingstop') && preg_match('#^/api/user/followingstop/(?P<user>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_get_followingstop');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_get_followingstop')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_followingstopAction',));
                }

                // api_user_follow_check
                if (0 === strpos($pathinfo, '/api/user/follow/check') && preg_match('#^/api/user/follow/check/(?P<user>[^/]++)/(?P<follower>[^/]++)/(?P<key_>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_follow_check');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_follow_check')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_follow_checkAction',));
                }

            }

        }

        // app_home_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_home_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'app_home_index',);
        }

        if (0 === strpos($pathinfo, '/tags')) {
            // app_home_tags_index
            if ($pathinfo === '/tags/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\HomeController::tagsAction',  '_route' => 'app_home_tags_index',);
            }

            // app_home_tags_delete
            if (0 === strpos($pathinfo, '/tags/delete') && preg_match('#^/tags/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_home_tags_delete')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::deletetagAction',));
            }

        }

        if (0 === strpos($pathinfo, '/notif')) {
            // app_home_notif_ringtone
            if ($pathinfo === '/notif/ringtone.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifRingtoneAction',  '_route' => 'app_home_notif_ringtone',);
            }

            if (0 === strpos($pathinfo, '/notif/u')) {
                // app_home_notif_url
                if ($pathinfo === '/notif/url.html') {
                    return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifUrlAction',  '_route' => 'app_home_notif_url',);
                }

                // app_home_notif_user
                if ($pathinfo === '/notif/user.html') {
                    return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifUserAction',  '_route' => 'app_home_notif_user',);
                }

            }

            // app_home_notif_category
            if ($pathinfo === '/notif/category.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\HomeController::notifCategoryAction',  '_route' => 'app_home_notif_category',);
            }

        }

        // api_home_api_device
        if (0 === strpos($pathinfo, '/api/device') && preg_match('#^/api/device/(?P<tkn>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'api_home_api_device');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_home_api_device')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_deviceAction',));
        }

        if (0 === strpos($pathinfo, '/support')) {
            // app_support_index
            if ($pathinfo === '/support/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\SupportController::indexAction',  '_route' => 'app_support_index',);
            }

            // app_support_view
            if (0 === strpos($pathinfo, '/support/view') && preg_match('#^/support/view/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_support_view')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::viewAction',));
            }

            // app_support_delete
            if (0 === strpos($pathinfo, '/support/delete') && preg_match('#^/support/delete/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_support_delete')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::deleteAction',));
            }

        }

        // api_support_add
        if (0 === strpos($pathinfo, '/api/support/add') && preg_match('#^/api/support/add/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_api_support_add;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_support_add')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::api_addAction',));
        }
        not_api_support_add:

        if (0 === strpos($pathinfo, '/report')) {
            // app_report_index
            if ($pathinfo === '/report/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\ReportController::indexAction',  '_route' => 'app_report_index',);
            }

            // app_report_delete
            if (0 === strpos($pathinfo, '/report/delete') && preg_match('#^/report/delete/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_report_delete')), array (  '_controller' => 'AppBundle\\Controller\\ReportController::deleteAction',));
            }

        }

        // api_report_add
        if (0 === strpos($pathinfo, '/api/report/add') && preg_match('#^/api/report/add/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_api_report_add;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_report_add')), array (  '_controller' => 'AppBundle\\Controller\\ReportController::api_addAction',));
        }
        not_api_report_add:

        if (0 === strpos($pathinfo, '/slide')) {
            // app_slide_add
            if ($pathinfo === '/slide/add.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\SlideController::addAction',  '_route' => 'app_slide_add',);
            }

            // app_slide_index
            if ($pathinfo === '/slide/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\SlideController::indexAction',  '_route' => 'app_slide_index',);
            }

            // app_slide_edit
            if (preg_match('#^/slide/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_slide_edit')), array (  '_controller' => 'AppBundle\\Controller\\SlideController::editAction',));
            }

            // app_slide_delete
            if (0 === strpos($pathinfo, '/slide/delete') && preg_match('#^/slide/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_slide_delete')), array (  '_controller' => 'AppBundle\\Controller\\SlideController::deleteAction',));
            }

            // app_slide_up
            if (0 === strpos($pathinfo, '/slide/up') && preg_match('#^/slide/up/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_slide_up')), array (  '_controller' => 'AppBundle\\Controller\\SlideController::upAction',));
            }

            // app_slide_down
            if (0 === strpos($pathinfo, '/slide/down') && preg_match('#^/slide/down/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_slide_down')), array (  '_controller' => 'AppBundle\\Controller\\SlideController::downAction',));
            }

        }

        // api_slide_all
        if (0 === strpos($pathinfo, '/api/slide/all') && preg_match('#^/api/slide/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'api_slide_all');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_slide_all')), array (  '_controller' => 'AppBundle\\Controller\\SlideController::api_allAction',));
        }

        if (0 === strpos($pathinfo, '/category')) {
            // app_category_index
            if ($pathinfo === '/category/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',  '_route' => 'app_category_index',);
            }

            // app_category_add
            if ($pathinfo === '/category/add.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::addAction',  '_route' => 'app_category_add',);
            }

            // app_category_edit
            if (0 === strpos($pathinfo, '/category/edit') && preg_match('#^/category/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',));
            }

            // app_category_delete
            if (0 === strpos($pathinfo, '/category/delete') && preg_match('#^/category/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
            }

            // app_category_up
            if (0 === strpos($pathinfo, '/category/up') && preg_match('#^/category/up/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_up')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::upAction',));
            }

            // app_category_down
            if (0 === strpos($pathinfo, '/category/down') && preg_match('#^/category/down/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_down')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::downAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/category')) {
                // api_category_by
                if (0 === strpos($pathinfo, '/api/category/by') && preg_match('#^/api/category/by/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_category_by');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_category_by')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::api_byAction',));
                }

                // api_category_all
                if (0 === strpos($pathinfo, '/api/category/all') && preg_match('#^/api/category/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_category_all');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_category_all')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::api_allAction',));
                }

                // api_category_popular
                if (0 === strpos($pathinfo, '/api/category/popular') && preg_match('#^/api/category/popular/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_category_popular');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_category_popular')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::api_popularAction',));
                }

            }

            // api_tags_all
            if (0 === strpos($pathinfo, '/api/tags/all') && preg_match('#^/api/tags/all/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_tags_all');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tags_all')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::api_tagsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/version')) {
            // app_version_add
            if ($pathinfo === '/version/add.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\VersionController::addAction',  '_route' => 'app_version_add',);
            }

            // app_version_index
            if ($pathinfo === '/version/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\VersionController::indexAction',  '_route' => 'app_version_index',);
            }

            // app_version_edit
            if (0 === strpos($pathinfo, '/version/edit') && preg_match('#^/version/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_version_edit')), array (  '_controller' => 'AppBundle\\Controller\\VersionController::editAction',));
            }

            // app_version_delete
            if (0 === strpos($pathinfo, '/version/delete') && preg_match('#^/version/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_version_delete')), array (  '_controller' => 'AppBundle\\Controller\\VersionController::deleteAction',));
            }

        }

        // api_version_check
        if (0 === strpos($pathinfo, '/api/version/check') && preg_match('#^/api/version/check/(?P<code>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'api_version_check');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_version_check')), array (  '_controller' => 'AppBundle\\Controller\\VersionController::api_check_v2Action',));
        }

        // app_ringtone_share
        if (0 === strpos($pathinfo, '/share') && preg_match('#^/share/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_ringtone_share')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::shareAction',));
        }

        if (0 === strpos($pathinfo, '/ringtone')) {
            // app_ringtone_multi
            if ($pathinfo === '/ringtone/multi.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::multiAction',  '_route' => 'app_ringtone_multi',);
            }

            // app_ringtone_add
            if ($pathinfo === '/ringtone/add.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::addAction',  '_route' => 'app_ringtone_add',);
            }

            // app_ringtone_reviews
            if ($pathinfo === '/ringtone/reviews.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::reviewsAction',  '_route' => 'app_ringtone_reviews',);
            }

            // app_ringtone_index
            if ($pathinfo === '/ringtone/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::indexAction',  '_route' => 'app_ringtone_index',);
            }

            // app_ringtone_edit
            if (0 === strpos($pathinfo, '/ringtone/edit') && preg_match('#^/ringtone/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_ringtone_edit')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::editAction',));
            }

            // app_ringtone_review
            if (0 === strpos($pathinfo, '/ringtone/review') && preg_match('#^/ringtone/review/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_ringtone_review')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::reviewAction',));
            }

            // app_ringtone_view
            if (0 === strpos($pathinfo, '/ringtone/view') && preg_match('#^/ringtone/view/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_ringtone_view')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::viewAction',));
            }

            // app_ringtone_delete
            if (0 === strpos($pathinfo, '/ringtone/delete') && preg_match('#^/ringtone/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_ringtone_delete')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/r')) {
            if (0 === strpos($pathinfo, '/api/ringtone')) {
                // api_ringtone_all
                if (0 === strpos($pathinfo, '/api/ringtone/all') && preg_match('#^/api/ringtone/all/(?P<order>[^/]++)/(?P<page>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_all');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_all')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_allAction',));
                }

                // api_ringtone_by_category
                if (0 === strpos($pathinfo, '/api/ringtone/category') && preg_match('#^/api/ringtone/category/(?P<page>\\d+)/(?P<category>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_by_category');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_by_category')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_by_categoryAction',));
                }

                // api_ringtone_by_user
                if (0 === strpos($pathinfo, '/api/ringtone/user') && preg_match('#^/api/ringtone/user/(?P<page>\\d+)/(?P<user>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_by_user');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_by_user')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_by_userAction',));
                }

                // api_ringtone_get
                if (0 === strpos($pathinfo, '/api/ringtone/get') && preg_match('#^/api/ringtone/get/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_get');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_get')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_getAction',));
                }

                // api_ringtone_by_me
                if (0 === strpos($pathinfo, '/api/ringtone/me') && preg_match('#^/api/ringtone/me/(?P<page>\\d+)/(?P<user>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_by_me');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_by_me')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_by_meAction',));
                }

                // api_ringtone_related
                if (0 === strpos($pathinfo, '/api/ringtone/related') && preg_match('#^/api/ringtone/related/(?P<id>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_related');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_related')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_relatedAction',));
                }

                // api_ringtone_by_query
                if (0 === strpos($pathinfo, '/api/ringtone/query') && preg_match('#^/api/ringtone/query/(?P<page>\\d+)/(?P<query>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_by_query');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_by_query')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_by_queryAction',));
                }

                // api_ringtone_by_follow
                if (0 === strpos($pathinfo, '/api/ringtone/by/follow') && preg_match('#^/api/ringtone/by/follow/(?P<page>\\d+)/(?P<user>\\d+)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_by_follow');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_by_follow')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_by_followAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/rate')) {
                // api_rate_add
                if (0 === strpos($pathinfo, '/api/rate/add') && preg_match('#^/api/rate/add/(?P<user>[^/]++)/(?P<ringtone>[^/]++)/(?P<value>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_rate_add');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rate_add')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_add_rateAction',));
                }

                // api_rate_get
                if (0 === strpos($pathinfo, '/api/rate/get') && preg_match('#^/api/rate/get/(?P<user>[^/]++)/(?P<ringtone>[^/]++)/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_rate_get');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rate_get')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_get_rateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/ringtone')) {
                // api_ringtone_upload
                if (0 === strpos($pathinfo, '/api/ringtone/upload') && preg_match('#^/api/ringtone/upload/(?P<token>[^/]++)/(?P<purchase>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_ringtone_upload');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_upload')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_uploadAction',));
                }

                // api_ringtone_add_download
                if (0 === strpos($pathinfo, '/api/ringtone/add/download') && preg_match('#^/api/ringtone/add/download/(?P<token>[^/]++)/(?P<purchase>[^/]++)/$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_ringtone_add_download;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ringtone_add_download')), array (  '_controller' => 'AppBundle\\Controller\\RingtoneController::api_add_downloadAction',));
                }
                not_api_ringtone_add_download:

            }

        }

        if (0 === strpos($pathinfo, '/medias')) {
            // media_index
            if (rtrim($pathinfo, '/') === '/medias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'media_index');
                }

                return array (  '_controller' => 'MediaBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
            }

            // media_add
            if ($pathinfo === '/medias/add') {
                return array (  '_controller' => 'MediaBundle\\Controller\\MediaController::addAction',  '_route' => 'media_add',);
            }

            // media_delete
            if (0 === strpos($pathinfo, '/medias/delete') && preg_match('#^/medias/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/medias')) {
            // api_media_delete
            if (0 === strpos($pathinfo, '/api/medias/delete') && preg_match('#^/api/medias/delete/(?P<id>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_media_delete');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_media_delete')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::api_deleteAction',));
            }

            // media_api_upload
            if (0 === strpos($pathinfo, '/api/medias/upload') && preg_match('#^/api/medias/upload/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'media_api_upload');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_api_upload')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::api_uploadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
