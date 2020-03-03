<section class=”slider”>
  <div class="row">
    <div class="container">

      <?php
      $count = 0;
      foreach ($DATA as $key => $complaint):
        $count ++;
        $post = $complaint['single_complaint'];
        $post_id = $post->ID;
        $post_content = $post->post_content;
        $post_link = $post->guid;
        ?>

        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <span class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $count; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $count; ?>">
                  <?php echo get_the_title($post_id); ?>
                </span>
              </h2>
            </div>

            <div id="collapseOne<?php echo $count; ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <?php echo $post_content; ?>
              </div>
            </div>
          </div>
        </div>
      <?php  endforeach; ?>

    </div>
  </div>
</section>


<script type='text/javascript'>
console.log('where you at?', <?php echo json_encode($DATA); ?>);
</script>
