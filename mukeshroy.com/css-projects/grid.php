<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <p class="text-justify">
            The grid can be used to achieve many different layouts. To use a Responsive Grid System, UI Developer needs
            persuasion engineering, innovation,
            and strategy for the column and their padding or margin and this is flexible way to create a responsive web
            site.
        </p>

        <p class="text-justify">
            <strong>Calculating Columns in a row</strong><br><br>
            it uses percentages, your fluid columns will fit into any width. The margins (gutters) use percentages too.
            As long as you can count up to the number of columns you need, you'll be fine.
        </p>
        <h6>Browser Support</h6>
        <ul>
            <li> All modern browsers and IE8+.</li>
        </ul>
        <div class="large-4 column">
            <h5>Preview</h5>

            <div class="row collapse grid-preview">
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">1
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">2
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">3
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">4
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">5
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">6
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">7
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">8
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">9
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">10
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">11
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true" title="12 column in one row!">12
                </div>
                <div class="clearfix pd-5"></div>
                <div class="small-12 column has-tip" data-tooltip aria-haspopup="true" title="12 cols in one row!">12
                </div>
                <div class="small-1 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 11 + 1 columns in one row!">1
                </div>
                <div class="small-11 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 11 + 1 columns in one row!">11
                </div>
                <div class="small-2 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 10 + 2 columns in one row!">2
                </div>
                <div class="small-10 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 10 + 2 columns in one row!">10
                </div>
                <div class="small-3 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 9 + 3 columns in one row!">
                    3
                </div>
                <div class="small-9 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 9 + 3 columns in one row!">
                    9
                </div>
                <div class="small-4 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 8 + 4 columns in one row!">
                    4
                </div>
                <div class="small-8 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 8 + 4 columns in one row!">
                    8
                </div>
                <div class="small-5 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 7 + 5 columns in one row!">
                    5
                </div>
                <div class="small-7 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 7 + 5 columns in one row!">
                    7
                </div>
                <div class="small-6 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 6 + 6 columns in one row!">
                    6
                </div>
                <div class="small-6 column has-tip" data-tooltip aria-haspopup="true"
                     title="devided 6 + 6 columns in one row!">
                    6
                </div>
            </div>
            <h5>How it works?</h5>
            <h5>.column</h5>
            divides the section into columns. Each column has a left margin of left and right
<pre>

padding-left: $column-gutter / 2;
padding-right: $column-gutter / 2;

</pre>
            where $column-gutter: rem-calc(30); around 15 pixels on a normal monitor, anywhere. It works in all browsers
            since IE6.

            <h5>.large-1 to .large-12</h5>
            specifies the width of the column. Using percentages means it's 100% fluid.
            <h5>@media queries</h5>
            as soon as the screen size gets less than 480 pixels the columns stack .
        </div>
        <div class="large-8 column">
            <h5>SASS</h5>
<pre>
@import'global';

@function grid-calc($colNumber, $totalColumns) {
  @return percentage(($colNumber / $totalColumns));
}

@mixin grid-column($columns: false, $last-column: false, $center: false) {
    padding-left: $column-gutter / 2;
    padding-right: $column-gutter / 2;
    width: grid-calc($columns, $total-columns);
    @if $last-column {
      float: $opposite-direction;
    }
}

@mixin grid-html-classes($size) {
  @for $i from 1 through $total-columns {
    .#{$size}-#{$i} {
      @include grid-column($columns: $i, $collapse: null, $float: false);
    }
  }
}

@include grid-html-classes();

@media #{$small-up} {
  @include grid-html-classes($size: small);
}

</pre>
        </div>

    </div>
</div>
<?php require_once 'footer.php'; ?>
