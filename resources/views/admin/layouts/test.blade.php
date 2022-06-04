<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">jsGrid</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tr class="jsgrid-header-row">
                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Name</th>
                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                style="width: 50px;">Age
                            </th>
                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 200px;">Address</th>
                            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                style="width: 100px;">Country
                            </th>
                            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                style="width: 100px;">Is Married
                            </th>
                        </tr>
                        <tr class="jsgrid-filter-row" style="display: none;">
                            <td class="jsgrid-cell" style="width: 150px;"><input type="text"></td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td>
                            <td class="jsgrid-cell" style="width: 200px;"><input type="text"></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select>
                                    <option value="0"></option>
                                    <option value="1">United States</option>
                                    <option value="2">Canada</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="4">France</option>
                                    <option value="5">Brazil</option>
                                    <option value="6">China</option>
                                    <option value="7">Russia</option>
                                </select></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     readonly=""></td>
                        </tr>
                        <tr class="jsgrid-insert-row" style="display: none;">
                            <td class="jsgrid-cell" style="width: 150px;"><input type="text"></td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td>
                            <td class="jsgrid-cell" style="width: 200px;"><input type="text"></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select>
                                    <option value="0"></option>
                                    <option value="1">United States</option>
                                    <option value="2">Canada</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="4">France</option>
                                    <option value="5">Brazil</option>
                                    <option value="6">China</option>
                                    <option value="7">Russia</option>
                                </select></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="jsgrid-grid-body" style="height: 869px;">
                    <table class="jsgrid-table">
                        <tbody>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Jeanette Pate</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">59</td>
                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 177, 7584 Amet, St.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Canada</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Kaden Hernandez</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">79</td>
                            <td class="jsgrid-cell" style="width: 200px;">366 Ut St.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United Kingdom</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Kenyon Stevens</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">20</td>
                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 704, 4580 Gravida Rd.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United Kingdom</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Jerome Harper</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">31</td>
                            <td class="jsgrid-cell" style="width: 200px;">2464 Porttitor Road</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Jelani Patel</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">36</td>
                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 541, 5805 Nec Av.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Canada</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Keaton Oconnor</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">21</td>
                            <td class="jsgrid-cell" style="width: 200px;">Ap #657-1093 Nec, Street</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Bree Johnston</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">31</td>
                            <td class="jsgrid-cell" style="width: 200px;">372-5942 Vulputate Avenue</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Canada</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Maisie Hodges</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">70</td>
                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 445, 3880 Odio, Rd.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Kuame Calhoun</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">39</td>
                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 609, 4105 Rutrum St.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Canada</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Carlos Cameron</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">38</td>
                            <td class="jsgrid-cell" style="width: 200px;">Ap #215-5386 A, Avenue</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Fulton Parsons</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">25</td>
                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 523, 3705 Sed Rd.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Wallace Christian</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">43</td>
                            <td class="jsgrid-cell" style="width: 200px;">416-8816 Mauris Avenue</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United Kingdom</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Caryn Maldonado</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">40</td>
                            <td class="jsgrid-cell" style="width: 200px;">108-282 Nonummy Ave</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Whilemina Frank</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">20</td>
                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 681, 3938 Egestas. Av.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Emery Moon</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">41</td>
                            <td class="jsgrid-cell" style="width: 200px;">Ap #717-8556 Non Road</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">France</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Price Watkins</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">35</td>
                            <td class="jsgrid-cell" style="width: 200px;">832-7810 Nunc Rd.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">France</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Lydia Castillo</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">59</td>
                            <td class="jsgrid-cell" style="width: 200px;">5280 Placerat, Ave</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Lawrence Conway</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">53</td>
                            <td class="jsgrid-cell" style="width: 200px;">Ap #452-2808 Imperdiet St.</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-row">
                            <td class="jsgrid-cell" style="width: 150px;">Kalia Nicholson</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">67</td>
                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 871, 3023 Tellus Road</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        <tr class="jsgrid-alt-row">
                            <td class="jsgrid-cell" style="width: 150px;">Brielle Baxter</td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">45</td>
                            <td class="jsgrid-cell" style="width: 200px;">Ap #822-9526 Ut, Road</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United Kingdom</td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"
                                                                                                     disabled=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="jsgrid-pager-container">
                    <div class="jsgrid-pager">Pages: <span class="jsgrid-pager-nav-button"><a
                                href="javascript:void(0);">First</a></span> <span class="jsgrid-pager-nav-button"><a
                                href="javascript:void(0);">Prev</a></span> <span class="jsgrid-pager-page"><a
                                href="javascript:void(0);">1</a></span><span
                            class="jsgrid-pager-page jsgrid-pager-current-page">2</span><span class="jsgrid-pager-page"><a
                                href="javascript:void(0);">3</a></span><span class="jsgrid-pager-page"><a
                                href="javascript:void(0);">4</a></span><span class="jsgrid-pager-page"><a
                                href="javascript:void(0);">5</a></span> <span class="jsgrid-pager-nav-button"><a
                                href="javascript:void(0);">Next</a></span> <span class="jsgrid-pager-nav-button"><a
                                href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 2 of 5
                    </div>
                </div>
                <div class="jsgrid-load-shader"
                     style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                <div class="jsgrid-load-panel"
                     style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
