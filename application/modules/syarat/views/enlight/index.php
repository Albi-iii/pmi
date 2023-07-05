<section id="contact">

  <?php if (count(array($data)) === 1) : ?>
    <div class="card probootstrap-animate" style="border: 0px;">
      <div class="card-body" style="padding: 0px;">
        <h4 class="title">Syarat</h4>
        <div class="description">
          <?php echo (array($data->syarat)) ? $data->syarat : '-' ?>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
  <?php else : ?>
    <div class="nothing-found">
      <div>No data found</div>
    </div>
    <div class="clearfix"></div>
  <?php endif; ?>

</section>