<?php
namespace App\Views\Admin\Layouts;
use App\Views\BaseView;


class Footer extends BaseView
{
    public static function render($data = null)
    {
        ?>
        </div>
        <!--end::Row-->
        </div>
        <!--end::Content container-->
        </div>
        <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024&copy;</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
        </div>
        <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
        </div>
        <!--end::Page-->
        </div>
        <!--end::Scrolltop-->
        <!--begin::Modals-->
        <!--begin::Modal - Upgrade plan-->
        <script>
            var hostUrl = "/public/assets/";
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="/public/assets/plugins/global/plugins.bundle.js"></script>
        <script src="/public/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="/public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/radar.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/themes/Animated.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/map.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
        <script src="https:/cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
        <script src="/public/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Vendors Javascript-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="/public/assets/js/widgets.bundle.js"></script>
        <script src="/public/assets/js/custom/widgets.js"></script>
        <script src="/public/assets/js/custom/custom-widgets/widget-1.js"></script>
        <script src="/public/assets/js/custom/custom-widgets/widget-2.js"></script>
        <script src="/public/assets/js/custom/apps/chat/chat.js"></script>
        <script src="/public/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="/public/assets/js/custom/utilities/modals/users-search.js"></script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
        </body>
        <!--end::Body-->

        </html>
        <?php

    }
}
?>