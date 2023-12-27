		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('/public/metronic/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('/public/metronic/assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{asset('/public/metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{asset('/public/metronic/assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('/public/metronic/assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('/public/metronic/assets/js/custom/modals/create-app.js')}}"></script>
		<script src="{{asset('/public/metronic/assets/js/custom/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('/public/metronic/assets/js/custom/pages/projects/list/list.js')}}"></script>
		<script src="{{asset('/public/metronic/assets/js/custom/modals/users-search.js')}}"></script>
		<script src="{{asset('/public/metronic/assets/js/custom/documentation/forms/daterangepicker.js')}}"></script>
		<script src="{{asset('/public/metronic/assets/plugins/custom/fslightbox/fslightbox.bundle.js')}}"></script>
		<!--end::Page Custom Javascript-->
		{{-- select 2  --}}
		<script src="{{asset('/public/metronic/assets/plugins/global/plugins.bundle.js')}}"></script>

		<script src="{{ asset('/public/customjs/custom.js') }}"></script>
		<script src="{{asset('/public/customjs/ajax.js')}}"></script>
		<script src="{{asset('/public/metronic//assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('/public/admin/bvalidator/dist/jquery.bvalidator.min.js')}}"></script>
		<script src="{{asset('/public/admin/bvalidator/dist/themes/presenters/default.min.js')}}"></script>
		<script src="{{asset('/public/admin/bvalidator/dist/themes/gray/gray.js')}}"></script>
		<!--end::Page Custom Javascript-->
		<script type="text/javascript">
			$(document).ready(function() {
				$('#FormId').bValidator();
			});
		</script>

		{{-- Alert code  --}}
		<script>
			// Start alert code
			@if(Session::has('success'))
			toastr.options = {
				"closeButton": false,
				"debug": false,
				"newestOnTop": true,
				"progressBar": true,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			};
			toastr.success("{{ session('success') }}", "Success");
			@endif

			@if(Session::has('error'))
			toastr.options = {
				"closeButton": false,
				"debug": false,
				"newestOnTop": true,
				"progressBar": true,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			};
			toastr.error("{{ session('error') }}", "Error");
			@endif

			@if(count($errors) > 0)
			var err = {
				!!$errors!!
			};
			$.each(err, function(index, value) {
				toastr.options = {
					"closeButton": false,
					"debug": false,
					"newestOnTop": true,
					"progressBar": true,
					"positionClass": "toast-top-right",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
				toastr.error(value, 'Error');
			});

			@endif
			// end alert code
			//preloader
			$(window).on('load', function() {
				$('.preloader').fadeOut('slow');
			});
		</script>
		<script>
			// $('.CkeditorClass').each(function() {
			// 	CKEDITOR.replace($(this).attr('id'));
			// });
			repeteCkEditor();

			function repeteCkEditor() {
				$('.CkeditorClass').each(function() {
					CKEDITOR.replace($(this).attr('id'));
				});
			}
		</script>

		<div class="preloader"></div>

		{{-- For new --}}