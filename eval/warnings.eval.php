<?php if ($go == "default") { ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.32/moment-timezone-with-data.min.js"></script>
<script>
var judging_end = moment.tz("<?php echo $judging_end; ?>","<?php echo get_timezone($_SESSION['prefsTimeZone']); ?>");
var label_weeks = "<?php echo strtolower($label_weeks); ?>";
var label_days = "<?php echo strtolower($label_days); ?>";
var label_hours = "<?php echo strtolower($label_hours); ?>"; 
$("#judging-ends").countdown(judging_end.toDate(), function(event) {
    $(this).text(event.strftime('%-w '+label_weeks+' %-d '+label_days+' %-H:%M:%S '+label_hours));
});
</script>
<?php } ?>
<?php if ($go == "scoresheet") { ?>
<!-- Modal: 15 Minutes Elapsed Warning -->
<div class="modal fade" id="eval-courtesy-warning-15" tabindex="-1" role="dialog" aria-labelledby="eval-courtesy-warning-15-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="eval-courtesy-warning-15-label"><?php echo $label_please_note; ?></h4>
      </div>
      <div class="modal-body">
        <p><?php echo $evaluation_info_071; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $label_understand; ?></button>
      </div>
    </div>
  </div>
</div>
<script>
var elapsedTimeStart = Date.now();
setInterval(function() {
  var elapsedTime = ((Date.now() - elapsedTimeStart) / 1000);
  var elapsedTimeDisp = formatTimeDisplay(elapsedTime,1);
  /**
   * Add hour display after 60 minutes 
   * (if session timeout is set to greater than 60)
   */
  if (elapsedTime > 3600) {
    var elapsedTimeDisp = formatTimeDisplay(elapsedTime,0);
  }
  $("#elapsed-time").html(elapsedTimeDisp);
  if ((elapsedTime > 600) && (elapsedTime < 900)) {
    $("#elapsed-time-p").attr("class", "text-warning");
  }
  if ((elapsedTime >= 900) && (elapsedTime < 901)) {
    $("#eval-courtesy-warning-15").modal('show');
  }
  if (elapsedTime >= 900) {
    $("#elapsed-time-p").attr("class", "text-danger");
  }
}, 1);
// session_end var defined in index.php
$("#session-end-eval").countdown(session_end, function(event) {
    if (session_end_min > 1440) var end_time = (event.strftime('%D:%H:%M:%S'));
    else if (session_end_min > 60) var end_time = (event.strftime('%H:%M:%S'));
    else var end_time = (event.strftime('%M:%S'));
    $(this).html(end_time); 
    if (end_time == "15:00") {
        $("#session-end-eval-p").attr("class", "text-warning");
    }
    if (end_time == "10:00") {
        $("#session-end-eval-p").attr("class", "text-danger");
    }
});
</script>
<?php } ?>