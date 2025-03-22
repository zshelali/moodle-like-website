<?php 
// back
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage !== 'index.php') {
  echo '<a href="javascript:history.back()" class="buttonlink back-button">← Back</a>';
}
?>

</body>

<footer>
  <p id="contact-info">
    Contact us at <br /> <!-- à changer -->
    <a href="mailto:ali.hajeri@utbm.fr" class="link-hover">ali.hajeri@utbm.fr</a>
  </p>
</footer>
</html>