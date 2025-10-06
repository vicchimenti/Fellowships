<span id="starthere"></span>
<div id="search-results" class="page page--full-width" data-t4-ajax-group="courseSearch" role="main">
    <article class="listing-page">
        <section class="su-listing">
        <?php if (!empty($results)) : ?>
            <?php foreach ($results as $item) : ?>
                <article class="listing--item news--item global-padding--5x fellowship--item">
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x">
                            <div class="cell medium-12">
                                <div class="news--item__text text-margin-reset">
                                    <h3 class="h4 funderline"><?php echo $item['fellowshipName'] ?></h3>
                                    <div class="description global-spacing--2x">
                                        <p><?php echo $item['fellowshipDescription'] ?></p>
                                    </div>
                                    <div class="global-spacing--4x">
                                        <div class="accordion flat-base-accordion" id="accordion-item-tab-<?php echo $item['contentID'] ?>">
                                            <button 
                                                id="accordion-item-button-<?php echo $item['contentID']; ?>"
                                                aria-controls="accordion-item-content-<?php echo $item['contentID']; ?>" 
                                                aria-expanded="true"
                                                data-toggle-type="menu" 
                                                aria-label="View details for <?php echo htmlspecialchars($item['fellowshipName']); ?>"
                                                class="accordion__button btn btn--small"
                                            >
                                                <span class="accordion__button-text">
                                                    View details for <?php echo htmlspecialchars($item['fellowshipName']); ?>
                                                </span>
                                            </button>
                                            <div id="accordion-item-content-<?php echo $item['contentID'] ?>"
                                                aria-labelledby="accordion-item-button-6930602"
                                                class="accordion__content">
                                                <div class="wysiwyg">
                                                    <?php if ($item['awardType']): ?>
                                                        <h4>Award Type</h4>
                                                        <ul>
                                                            <li><?php echo implode('</li><li>', explode('|', $item['awardType'])) ?></li>
                                                        </ul>
                                                    <?php endif ?>
                                                    <?php if ($item['focusArea']): ?>
                                                        <h4>Focus Area</h4>
                                                        <ul>
                                                            <li><?php echo implode('</li><li>', explode('|', $item['focusArea'])) ?></li>
                                                        </ul>
                                                    <?php endif ?>
                                                    <?php if ($item['yearInSchool']): ?>
                                                        <h4>Year in School</h4>
                                                        <ul>
                                                            <li><?php echo implode('</li><li>', explode('|', $item['awardType'])) ?></li>
                                                        </ul>
                                                    <?php endif ?>
                                                    <?php if ($item['location']): ?>
                                                        <h4>Location</h4>
                                                        <ul>
                                                            <li><?php echo implode('</li><li>', explode('|', $item['location'])) ?></li>
                                                        </ul>
                                                    <?php endif ?>
                                                    <?php if ($item['citizenship']): ?>
                                                        <h4>Citizenship</h4>
                                                        <ul>
                                                            <li><?php echo implode('</li><li>', explode('|', $item['citizenship'])) ?></li>
                                                        </ul>
                                                    <?php endif ?>
                                                    <?php if ($item['deadline']): ?>
                                                        <h4>deadline</h4>
                                                        <p><?php echo $item['deadline'] ?></p>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
            <?php if (isset($paginationArray)) : ?>
                <div class="pagination-box">
                    <div class="pagination-pages">
                        <nav aria-label="pagination" class="pagination" data-t4-ajax-link="normal" data-t4-scroll="true">
                            <?php foreach ($paginationArray as $paginationItem) : ?>
                                <?php if ($paginationItem['current']) : ?>
                                    <span class="currentpage"><a href=""><?php echo $paginationItem['text']; ?></a></span>
                                <?php else : ?>
                                    <a href="<?php echo $paginationItem['href']; ?>" class="<?php echo $paginationItem['class']; ?>">
                                    <?php echo $paginationItem['text']; ?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </div>
            <?php endif; ?>
        <?php else : ?>
            <p style="text-align: center; padding: 30px; font-weight: bold;">No Results Found</p>
        <?php endif; ?>
        </section>
    </article>
</div>
