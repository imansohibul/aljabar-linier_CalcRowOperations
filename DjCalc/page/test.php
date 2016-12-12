
<!DOCTYPE html>
<html>
<head>
<?php 

function decimalToFraction($decimal)
{
    if ($decimal < 0 || !is_numeric($decimal)) {
        // Negative digits need to be passed in as positive numbers
        // and prefixed as negative once the response is imploded.
        return false;
    }
    if ($decimal == 0) {
        return [0, 0];
    }

    $tolerance = 1.e-4;

    $numerator = 1;
    $h2 = 0;
    $denominator = 0;
    $k2 = 1;
    $b = 1 / $decimal;
    do {
        $b = 1 / $b;
        $a = floor($b);
        $aux = $numerator;
        $numerator = $a * $numerator + $h2;
        $h2 = $aux;
        $aux = $denominator;
        $denominator = $a * $denominator + $k2;
        $k2 = $aux;
        $b = $b - $a;
    } while (abs($decimal - $numerator / $denominator) > $decimal * $tolerance);

    return [
        $numerator,
        $denominator
    ];
}
?>
    <style>
        .resizing-input input,
.resizing-input span {
  font-size: 12px;
  font-family: Sans-serif;
  white-space: pre;
  padding: 5px;
}
    </style>
    </head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="resizing-input">
  First:
  <input type="text" placeholder="placeholder" />
  <span style="display:none"></span>
</div>

<h5><?php $a=decimalToFraction(1.5); var_dump($a);?></h5>
<button onclick="myFunction()">Try it</button>

<script type="text/javascript">
function myFunction() {
    alert(math.fraction('0.5'));
}
</script>
<br>
    <script type="text/javascript">
        $(document).ready(function() {
  var $inputs = $('.resizing-input');

  // Resize based on text if text.length > 0
  // Otherwise resize based on the placeholder
  function resizeForText(text) {
    var $this = $(this);
    if (!text.trim()) {
      text = $this.attr('placeholder').trim();
    }
    var $span = $this.parent().find('span');
    $span.text(text);
    var $inputSize = $span.width();
    $this.css("width", $inputSize);
  }

  $inputs.find('input').keypress(function(e) {
    if (e.which && e.charCode) {
      var c = String.fromCharCode(e.keyCode | e.charCode);
      var $this = $(this);
      resizeForText.call($this, $this.val() + c);
    }
  });

  // Backspace event only fires for keyup
  $inputs.find('input').keyup(function(e) {
    if (e.keyCode === 8 || e.keyCode === 46) {
      resizeForText.call($(this), $(this).val());
    }
  });

  $inputs.find('input').each(function() {
    var $this = $(this);
    resizeForText.call($this, $this.val())
  });
});
    </script>
</body>
</html>