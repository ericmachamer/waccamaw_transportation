<!-- Tables
        ================================================== -->
<div id="tables" class="bs-docs-section">

    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Tables</h1>
            </div>
            <h2>Examples</h2>
            <p>Due to the widespread use of tables across third-party widgets like calendars and date pickers, we’ve
                designed our tables to be <strong>opt-in</strong>. Just add the base class <code
                        class="highlighter-rouge">.table</code> to any <code
                        class="highlighter-rouge">&lt;table&gt;</code>, then extend with custom styles or our various
                included modifier classes.</p>
            <p>Using the most basic table markup, here’s how <code class="highlighter-rouge">.table</code>-based tables
                look in Bootstrap. <strong>All table styles are inherited in Bootstrap 4</strong>, meaning any nested
                tables will be styled in the same manner as the parent.</p>
            <div class="bs-component">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p>You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.
            </p>
            <div class="bs-component">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h2>Table head options</h2>
            <p>Similar to tables and dark tables, use the modifier classes <code
                        class="highlighter-rouge">.thead-light</code> or <code
                        class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s
                appear light or dark gray.</p>
            <div class="bs-component">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h2>Striped rows</h2>
            <p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within
                the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
            <div class="bs-component">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bs-component">
                <table class="table table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h2>Bordered table</h2>
            <p>Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and
                cells.</p>
            <div class="bs-component">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bs-component">
                <table class="table table-bordered table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h2>Borderless table</h2>
            <p>Add <code class="highlighter-rouge">.table-borderless</code> for a table without borders.</p>
            <div class="bs-component">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p><code class="highlighter-rouge">.table-borderless</code> can also be used on dark tables.</p>
            <div class="bs-component">
                <table class="table table-borderless table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h2>Hoverable rows</h2>
            <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a
                <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
            <div class="bs-component">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bs-component">
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h2>Small table</h2>
            <p>Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding
                in half.</p>
            <div class="bs-component">
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bs-component">
                <table class="table table-sm table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h2>Contextual classes</h2>
            <p>Use contextual classes to color table rows or individual cells.</p>
            <div class="bs-component">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Class</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-active">
                        <th scope="row">Active</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <th scope="row">Default</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>


                    <tr class="table-primary">
                        <th scope="row">Primary</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Secondary</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">Success</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-danger">
                        <th scope="row">Danger</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-warning">
                        <th scope="row">Warning</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">Info</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-light">
                        <th scope="row">Light</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Dark</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p>Regular table background variants are not available with the dark table, however, you may use text or
                background utilities to achieve similar styles.</p>
            <div class="bs-component">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-primary">
                        <th scope="row">1</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="bg-success">
                        <th scope="row">3</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="bg-info">
                        <th scope="row">5</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="bg-warning">
                        <th scope="row">7</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="bg-danger">
                        <th scope="row">9</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bd-callout bd-callout-warning">
                <h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>
                <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of
                    assistive technologies – such as screen readers. Ensure that information denoted by the color is
                    either obvious from the content itself (e.g. the visible text), or is included through alternative
                    means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code>
                    class.</p>
            </div>
            <p>Create responsive tables by wrapping any <code class="highlighter-rouge">.table</code> with <code
                        class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>, making the table scroll
                horizontally at each <code class="highlighter-rouge">max-width</code> breakpoint of up to (but not
                including) 576px, 768px, 992px, and 1120px, respectively.</p>
            <div class="bd-callout bd-callout-info">
                <p>Note that since browsers do not currently support <a
                            href="https://www.w3.org/TR/mediaqueries-4/#range-context">range context queries</a>, we
                    work around the limitations of <a href="https://www.w3.org/TR/mediaqueries-4/#mq-min-max"><code
                                class="highlighter-rouge">min-</code> and <code class="highlighter-rouge">max-</code>
                        prefixes</a> and viewports with fractional widths (which can occur under certain conditions on
                    high-dpi devices, for instance) by using values with higher precision for these comparisons.</p>
            </div>
            <h2>Captions</h2>
            <p>A <code class="highlighter-rouge">&lt;caption&gt;</code> functions like a heading for a table. It helps
                users with screen readers to find a table and understand what it’s about and decide if they want to read
                it.</p>
            <div class="bs-component">
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h2>Responsive tables</h2>
            <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across
                all viewports by wrapping a <code class="highlighter-rouge">.table</code> with <code
                        class="highlighter-rouge">.table-responsive</code>. Or, pick a maximum breakpoint with which to
                have a responsive table up to by using <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>.
            </p>
            <div class="bd-callout bd-callout-warning">
                <h5 id="vertical-clippingtruncation">Vertical clipping/truncation</h5>

                <p>Responsive tables make use of <code class="highlighter-rouge">overflow-y: hidden</code>, which clips
                    off any content that goes beyond the bottom or top edges of the table. In particular, this can clip
                    off dropdown menus and other third-party widgets.</p>
            </div>
            <h3>Always responsive</h3>
            <p>Across every breakpoint, use <code class="highlighter-rouge">.table-responsive</code> for horizontally
                scrolling tables.</p>
            <div class="bs-component">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>