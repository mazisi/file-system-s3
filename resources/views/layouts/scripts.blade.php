@livewireScripts
 <!-- BEGIN VENDOR JS-->
 <script src="{{ asset('app-assets/js/vendors.min.js') }}"></script>
 <!-- BEGIN VENDOR JS-->
 <!-- BEGIN PAGE VENDOR JS-->
 <script src="{{ asset('app-assets/vendors/chartjs/chart.min.js') }}"></script>
 <script src="{{ asset('app-assets/vendors/chartist-js/chartist.min.js') }}"></script>
 <script src="{{ asset('app-assets/vendors/chartist-js/chartist-plugin-tooltip.js') }}"></script>
 <script src="{{ asset('app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js') }}"></script>
 <!-- END PAGE VENDOR JS-->
 <!-- BEGIN THEME  JS-->
 <script src="{{ asset('app-assets/js/plugins.js') }}"></script>
 <script src="{{ asset('app-assets/js/search.js') }}"></script>
 <script src="{{ asset('app-assets/js/custom/custom-script.js') }}"></script>
 <script src="{{ asset('app-assets/js/scripts/customizer.js') }}"></script>
 <!-- END THEME  JS-->
 <!-- BEGIN PAGE LEVEL JS-->
 <script src="{{ asset('app-assets/js/scripts/dashboard-modern.js') }}"></script>
 <script src="{{ asset('app-assets/js/scripts/advance-ui-modals.js') }}"></script>
 
 @stack('page-specific-js')
 @stack('file-pond')
 

