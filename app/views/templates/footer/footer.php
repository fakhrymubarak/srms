<script src="<?= BASE_URL; ?>js/jquery/jquery-2.2.4.min.js"></script>
<script src="<?= BASE_URL; ?>js/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= BASE_URL; ?>js/bootstrap/bootstrap.min.js"></script>
<script src="<?= BASE_URL; ?>js/pace/pace.min.js"></script>
<script src="<?= BASE_URL; ?>js/lobipanel/lobipanel.min.js"></script>
<script src="<?= BASE_URL; ?>js/iscroll/iscroll.js"></script>
<script src="<?= BASE_URL; ?>js/icheck/icheck.min.js"></script>

<!-- ========== PAGE JS FILES ========== -->
<script src="<?= BASE_URL; ?>js/prism/prism.js"></script>

<!-- ========== THEME JS ========== -->
<script src="<?= BASE_URL; ?>js/main.js"></script>
<script>
  $(function() {
    $('.counter').counterUp({
      delay: 10,
      time: 500
    });

  });

  $(function() {
    $('input.flat-blue-style').iCheck({
      checkboxClass: 'icheckbox_flat-blue'
    });
  });

  $(function($) {
    $(".js-states").select2();
    $(".js-states-limit").select2({
      maximumSelectionLength: 2
    });
    $(".js-states-hide").select2({
      minimumResultsForSearch: Infinity
    });
  });

  function CallPrint(strid) {
    var prtContent = document.getElementById("printed");
    var WinPrint = window.open('', '', 'left=0,top=0,width=1000,height=1400,toolbar=0,scrollbars=0,status=0');
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
  }
</script>

<script>
</script>
</body>

</html>