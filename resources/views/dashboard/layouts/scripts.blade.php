<script src="{{ asset('/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
  integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
  integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="{{ asset('/assets/dashboard.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/tZ1i9eeiI/n9pOvZl+f6H0tYZkCH4UszA8s4="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
  integrity="sha384-eM68JKFL6MZxhlW3lO5ljT9S0+wn50bB40DdT7KEuv4CpJ0V4+QFq70Z6V4N9lrD" crossorigin="anonymous"></script>

{{-- anime on scroll --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- delete sweet alert --}}
<script>
  class DeleteConfirmation {
      constructor(formClass) {
          this.forms = document.querySelectorAll('.' + formClass);
          this.init();
      }

      init() {
          this.forms.forEach((form) => {
              form.addEventListener('submit', this.handleFormSubmit.bind(this));
          });
      }

      handleFormSubmit(event) {
          event.preventDefault();
          const form = event.target;
          Swal.fire({
              title: 'Are you sure?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Yes, Delete It!'
          }).then((result) => {
              if (result.isConfirmed) {
                  form.submit();
              }
          });
      }
  }

  document.addEventListener('DOMContentLoaded', function () {
      new DeleteConfirmation('deleteForm');
  });
</script>