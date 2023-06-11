<?php
/** @var $cameraList array */
?>
<div class="accordion accordion-flush">
    <?php foreach ($cameraList as $category => $cameraFromCategory):
        $first = true; ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_<?= $categoryCode = $cameraFromCategory[0]['category']['code'] ?>">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        aria-controls="collapse_<?= $categoryCode ?>"
                        data-bs-target="#collapse_<?= $categoryCode ?>">
                    <?= $category ?>
                </button>
            </h2>
            <div id="collapse_<?= $categoryCode ?>" class="accordion-collapse collapse"
                 aria-labelledby="heading_<?= $categoryCode ?>">
                <div class="accordion-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <?php foreach ($cameraFromCategory as $camera): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?= $first ? 'active' : '' ?> "
                                        id="pills-camera_<?= $cameraId = $camera['id'] ?>-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-camera_<?= $cameraId ?>" type="button" role="tab"
                                        aria-controls="pills-camera_<?= $cameraId ?>"
                                        aria-selected="true"><?= trim($camera['name']) ?>
                                </button>
                            </li>
                            <?php $first = false; endforeach; ?>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <?php foreach ($cameraFromCategory as $camera): ?>
                            <div class="tab-pane fade <?= $first ? '' : 'show active' ?>"
                                 id="pills-camera_<?= $cameraId = $camera['id'] ?>" role="tabpanel"
                                 aria-labelledby="pills-camera_<?= $cameraId ?>-tab">
                                <div>
                                    <iframe width="640" height="480" src="<?= $camera['link'] ?>"
                                            frameborder="0"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                            <?php $first = true; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>