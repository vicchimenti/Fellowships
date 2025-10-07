<?php
$genericFacet = \T4\PHPSearchLibrary\FacetFactory::getInstance('GenericFacet', $documentCollection, $queryHandler);
$filters = $queryHandler->getQueryValuesForPrint();
$categoryFilters = array('focusArea','yearInSchool','awardType', 'citizenship', 'location');
?>
<section class="su-listing">
    <div id="searchoptionsGeneric" role="search" class="su-listing--form-wrapper bg--dark global-padding--8x" data-t4-ajax-group="courseSearch">
        <div class="grid-container">
            <h2 class="h3">Fellowship Finder</h2>
        </div>
        <form>
            <div class="cell medium-6 large-4">
                <label for="keywords">Search</label>
                <input type="text" name="keywords" id="keywords" placeholder="Search All Fellowships&hellip;" value="<?php echo !empty($query['keywords']) ? $query['keywords'] : ''  ?>">
            </div>
            <div class="cell medium-6 large-4">
                <?php
                $element = 'awardType';
                $genericFacet->setMember('element', $element);
                $genericFacet->setMember('type', 'List');
                $genericFacet->setMember('facetSource', 'documents');
                $genericFacet->setMember('sortingState', true);
                $genericFacet->setMember('multipleValueState', true);
                $genericFacet->setMember('multipleValueSeparator', '|');
                $search = $genericFacet->displayFacet();
                ?>
                <label for="<?php echo $element; ?>" class="label-text">Award Type</label>
                <select id="<?php echo $element; ?>" name="<?php echo $element; ?>" data-cookie="T4_persona">
                    <option value="">All Award Types</option>
                    <?php foreach ($search as $item) : ?>
                        <option value="<?php echo strtolower($item['value']); ?>" <?php echo $item['selected'] ? 'selected' : '' ?>><?php echo $item['label']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="cell medium-6 large-4">
                <?php
                $element = 'focusArea';
                $genericFacet->setMember('element', $element);
                $genericFacet->setMember('type', 'List');
                $genericFacet->setMember('facetSource', 'documents');
                $genericFacet->setMember('sortingState', true);
                $genericFacet->setMember('multipleValueState', true);
                $genericFacet->setMember('multipleValueSeparator', '|');
                $search = $genericFacet->displayFacet();
                ?>
                <label for="<?php echo $element; ?>" class="label-text">Focus Area</label>
                <select id="<?php echo $element; ?>" name="<?php echo $element; ?>" data-cookie="T4_persona">
                    <option value="">All Focus Areas</option>
                    <?php foreach ($search as $item) : ?>
                        <option value="<?php echo strtolower($item['value']); ?>" <?php echo $item['selected'] ? 'selected' : '' ?>><?php echo $item['label']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="cell medium-6 large-4">
                <?php
                $element = 'yearInSchool';
                $genericFacet->setMember('element', $element);
                $genericFacet->setMember('type', 'List');
                $genericFacet->setMember('facetSource', 'documents');
                $genericFacet->setMember('sortingState', true);
                $genericFacet->setMember('multipleValueState', true);
                $genericFacet->setMember('multipleValueSeparator', '|');
                $search = $genericFacet->displayFacet();
                ?>
                <label for="<?php echo $element; ?>" class="label-text">Year In School</label>
                <select id="<?php echo $element; ?>" name="<?php echo $element; ?>" data-cookie="T4_persona">
                    <option value="">All Years</option>
                    <?php foreach ($search as $item) : ?>
                        <option value="<?php echo strtolower($item['value']); ?>" <?php echo $item['selected'] ? 'selected' : '' ?>><?php echo $item['label']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="cell medium-6 large-4">
                <?php
                $element = 'location';
                $genericFacet->setMember('element', $element);
                $genericFacet->setMember('type', 'List');
                $genericFacet->setMember('facetSource', 'documents');
                $genericFacet->setMember('sortingState', true);
                $genericFacet->setMember('multipleValueState', true);
                $genericFacet->setMember('multipleValueSeparator', '|');
                $search = $genericFacet->displayFacet();
                ?>
                <label for="<?php echo $element; ?>" class="label-text">Locations</label>
                <select id="<?php echo $element; ?>" name="<?php echo $element; ?>" data-cookie="T4_persona">
                    <option value="">All Locations</option>
                    <?php foreach ($search as $item) : ?>
                        <option value="<?php echo strtolower($item['value']); ?>" <?php echo $item['selected'] ? 'selected' : '' ?>><?php echo $item['label']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="cell medium-6 large-4">
                <?php
                $element = 'citizenship';
                $genericFacet->setMember('element', $element);
                $genericFacet->setMember('type', 'List');
                $genericFacet->setMember('facetSource', 'documents');
                $genericFacet->setMember('sortingState', true);
                $genericFacet->setMember('multipleValueState', true);
                $genericFacet->setMember('multipleValueSeparator', '|');
                $search = $genericFacet->displayFacet();
                ?>
                <label for="<?php echo $element; ?>" class="label-text">Citizenship</label>
                <select id="<?php echo $element; ?>" name="<?php echo $element; ?>" data-cookie="T4_persona">
                    <option value="">All Citizenships</option>
                    <?php foreach ($search as $item) : ?>
                        <option value="<?php echo strtolower($item['value']); ?>" <?php echo $item['selected'] ? 'selected' : '' ?>><?php echo $item['label']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="cell initial-12">
                <input type="submit" value="Submit" class="button">
            </div>
        </form>
    </div>
    <div class="filter-feedback">
        <div class="grid-container">
            <span id="starthere"></span>          
            <div id="searchoptions-filters" class="active-filters" role="search" data-t4-ajax-group="courseSearch" aria-label="Deselect Filters">
                <div id="event-filters" class="active-filters--list" >
                    <span>Active filters:</span>
                    <?php  $i = 0; if ($filters !== null) : ?>
                        <?php
                        $tagsHTML = '';
                        foreach ($categoryFilters as $key) {
                            if (isset($filters[$key]) && is_array($filters[$key])) :
                                foreach ($filters[$key] as $value) : 
                                    $tagsHTML .= '<li class="filter-' . $i++ . ' small primary" role="button" tabindex="0" data-t4-value="' . strtolower($value) . '" data-t4-filter="' . $key . '">' . $value . '<span class="remove"><i class="fa fa-times"></i></span></li>'; 
                                endforeach;
                            elseif (isset($filters[$key])) :
                                $value = $filters[$key];
                                $tagsHTML .= '<li class="filter-' . $i++ . ' small primary" role="button" tabindex="0" data-t4-value="' . strtolower($value) . '" data-t4-filter="' . $key . '">' . $value . '<span class="remove"><i class="fa fa-times"></i></span></li>'; 
                            endif;
                        }
                        if (isset($filters['keywords'])) :
                            $tagsHTML .= '<li class="filter-' . $i++ . ' small primary" role="button" tabindex="0" data-t4-filter="keywords">' . $filters['keywords'] . '<span class="remove"><i class="fa fa-times"></i></span></li>'; 
                        endif; 
                        echo $tagsHTML != '' ? '<ul class="no-bullet">' . $tagsHTML . '</ul>' : '';
                        ?>
                    <?php endif; ?>
                </div>
              <?php if ($i > 0) : ?>
              <div class="funderline">
                <a href="index.php" role="button" data-t4-ajax-link="true">
                  Clear Filters
                  <span class="fa fa-times"></span>
                </a>
              </div>
              <?php endif; ?>    
              <div class="search-count"><p>Showing <strong><?php echo count($results) ?> fellowships</strong> of <?php echo $totalResults; ?></p></div>
            </div>          
        </div>
    </div>
</section>







