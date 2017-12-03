<div id="modal-image-container" class="image-modal">
    <span class="close image-modal" title="Close Gallery Popup" onclick="document.getElementById('modal-image-container').style.display='none'">&times;</span>
    <a class="image-modal-content image-modal" target="_blank">
        <img id="main-modal-image" alt="image of popup window" class="image-modal">
    </a>
    <?php   if(ACTION !== 'articles') { ?>
    <span class="icon-arrow-left image-modal" title="Previous Photo"></span>
    <span class="icon-arrow-right image-modal" title="Next Photo"></span>
    <?php   } ?>
    <div id="modal-caption" class="image-modal"></div>
</div>