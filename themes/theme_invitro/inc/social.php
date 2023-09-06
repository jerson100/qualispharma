<ul class="media">
    <?php if (!empty(get_option('facebook'))): ?>
        <li>
            <a href="<?php echo get_option('facebook') ?>" title="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="73.242" height="73.236" viewBox="0 0 73.242 73.236">
                    <path id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square"
                        d="M65.395,2.25H7.847A7.847,7.847,0,0,0,0,10.1V67.64a7.847,7.847,0,0,0,7.847,7.847H30.286v-24.9h-10.3V38.868h10.3V29.936c0-10.16,6.049-15.772,15.314-15.772a62.4,62.4,0,0,1,9.077.791v9.972H49.564c-5.037,0-6.608,3.126-6.608,6.331v7.61H54.2L52.4,50.588H42.956v24.9H65.395a7.847,7.847,0,0,0,7.847-7.847V10.1A7.847,7.847,0,0,0,65.395,2.25Z"
                        transform="translate(0 -2.25)" fill="#53B3D3" />
                </svg>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(get_option('instagram'))): ?>
        <li>
            <a href="<?php echo get_option('instagram') ?>" title="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" width="58.127" height="58.11" viewBox="0 0 58.127 58.11">
                    <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram"
                        d="M29.065,16.394a14.9,14.9,0,1,0,14.9,14.9A14.876,14.876,0,0,0,29.065,16.394Zm0,24.585a9.686,9.686,0,1,1,9.687-9.686A9.7,9.7,0,0,1,29.065,40.978ZM48.049,15.784a3.475,3.475,0,1,1-3.475-3.475A3.467,3.467,0,0,1,48.049,15.784Zm9.868,3.527c-.22-4.655-1.284-8.778-4.694-12.176S45.7,2.675,41.047,2.442c-4.8-.272-19.179-.272-23.977,0C12.427,2.662,8.3,3.726,4.893,7.123S.432,14.643.2,19.3c-.272,4.8-.272,19.178,0,23.975.22,4.655,1.284,8.778,4.694,12.176s7.521,4.46,12.177,4.694c4.8.272,19.179.272,23.977,0,4.655-.22,8.779-1.284,12.177-4.694s4.461-7.521,4.694-12.176c.272-4.8.272-19.165,0-23.962Zm-6.2,29.11a9.807,9.807,0,0,1-5.524,5.524c-3.825,1.517-12.9,1.167-17.13,1.167s-13.318.337-17.13-1.167A9.807,9.807,0,0,1,6.41,48.421C4.893,44.6,5.243,35.52,5.243,31.292S4.906,17.976,6.41,14.164A9.807,9.807,0,0,1,11.935,8.64c3.825-1.517,12.9-1.167,17.13-1.167s13.318-.337,17.13,1.167a9.807,9.807,0,0,1,5.524,5.524c1.517,3.825,1.167,12.9,1.167,17.129S53.236,44.609,51.719,48.421Z"
                        transform="translate(0.005 -2.238)" fill="#53b3d3" />
                </svg>
            </a>
        </li>
    <?php endif; ?>
</ul>