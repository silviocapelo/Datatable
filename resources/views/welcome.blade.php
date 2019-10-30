
<!Doctype html>
<html>
    <header>
        <title>Datatable</title>
        
        <!-- DataTable importations-->

        {{-- importation bootstrap 4 of  datatanble icons and aligments--}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
       
        {{-- importation bootstrap 4 of datatanble all resources and formats --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

        {{-- importation jquery --}}
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        
        {{-- importation jquery specify version datatables js --}}
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

        {{-- importation bootstrap 4 specify version datatables js --}}
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

        {{-- importation buttons specify version datatables js --}}
        <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>

        {{-- importation colvis specify version datatables js, button of filter colums--}}
        <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.colVis.min.js"></script>

        {{-- importation buttons specify version datatables css, all buttons formats and aligments --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">

        {{-- importation ellipsis, famous suspension points specify version datatables js, in colums--}}
        <script src="https://cdn.datatables.net/plug-ins/1.10.20/dataRender/ellipsis.js"></script>

    </header>
    <body>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <table id="example"  class="table table-bordered table-hover datatable" style="width:100% " >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect System Architect System Architect System Architect System Architect System Architect System Architect System Architect System Architect </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                    
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                    <script>
                        jQuery.fn.dataTable.render.ellipsis = function ( cutoff, wordbreak, escapeHtml ) {
                            var esc = function ( t ) {
                                return t
                                    .replace( /&/g, '&amp;' )
                                    .replace( /</g, '&lt;' )
                                    .replace( />/g, '&gt;' )
                                    .replace( /"/g, '&quot;' );
                            };
                            
                            return function ( d, type, row ) {
                                // Order, search and type get the original data
                                if ( type !== 'display' ) {
                                    return d;
                                }
                        
                                if ( typeof d !== 'number' && typeof d !== 'string' ) {
                                    return d;
                                }
                        
                                d = d.toString(); // cast numbers
                        
                                if ( d.length <= cutoff ) {
                                    return d;
                                }
                        
                                var shortened = d.substr(0, cutoff-1);
                    
                                // Find the last white space character in the string
                                if ( wordbreak ) {
                                    shortened = shortened.replace(/\s([^\s]*)$/, '');
                                }
                        
                                // Protect against uncontrolled HTML input
                                if ( escapeHtml ) {
                                    shortened = esc( shortened );
                                }
                        
                                return '<span class="ellipsis" title="'+esc(d)+'">'+shortened+'&#8230;</span>';
                            };
                        };


                        $(document).ready( function () {
                            $('.datatable').DataTable({
                                scroller:true,
                                scrollX:true,
                                stateSave:true,
                                "language":{
                                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                                },
                                dom: 'Bfrtip',
                                buttons: [
                                    {
                                    extend:'colvis',
                                    text:'Colunas'
                                    }
                                ],
                                columnDefs: [
                                    {
                                        targets: 1,
                                        render: $.fn.dataTable.render.ellipsis( 10 )
                                    }
                                ],
                            });
                        });
                    </script>    
                </div>
            </div>
        </div>
    </body>
</html>



