<?php

	use App\dmha_5;

    function dmha_5_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_5::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_5_data_table($AUTH_ID,$dmha_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';
            $model = dmha_5::let_me_generate_data_array($AUTH_ID,NULL);

        // ------------------------------------------------------------------------- ACTION
        /*
            $isi .= 
            general_colgroup(3).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>
            <tbody>
            ';            
            foreach($model as $row)
            {
                $isi .= '
                <tr>
                '.td_me($row->id, 'text-center').'
                '.td_me($row->nama, '').'
                '.td_me(color_admin_v42_dropdown($AUTH_ID,$dmha_1,$row->id), 'text-center').'
                </tr>
                ';
            }
                
            $isi .= '
            </tbody>
            ';
            */

            $isi = '
            <table id="data-table-defaulta" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="1%"></th>
                        <th width="1%" data-orderable="false"></th>
                        <th class="text-nowrap">Rendering engine</th>
                        <th class="text-nowrap">Browser</th>
                        <th class="text-nowrap">Platform(s)</th>
                        <th class="text-nowrap">Engine version</th>
                        <th class="text-nowrap">CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td width="1%" class="f-s-600 text-inverse">1</td>
                        <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td>4</td>
                        <td>X</td>
                    </tr>
                    <tr class="even gradeC">
                        <td class="f-s-600 text-inverse">2</td>
                        <td class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr>
                    <tr class="odd gradeA">
                        <td class="f-s-600 text-inverse">3</td>
                        <td class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                    </tr>
                    <tr class="even gradeA">
                        <td class="f-s-600 text-inverse">4</td>
                        <td class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                    </tr>
                    <tr class="odd gradeA">
                        <td class="f-s-600 text-inverse">5</td>
                        <td class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                    </tr>
                    <tr class="even gradeA">
                        <td class="f-s-600 text-inverse">6</td>
                        <td class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">7</td>
                        <td class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">8</td>
                        <td class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">9</td>
                        <td class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">10</td>
                        <td class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">11</td>
                        <td class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">12</td>
                        <td class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">13</td>
                        <td class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">14</td>
                        <td class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">15</td>
                        <td class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">16</td>
                        <td class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">17</td>
                        <td class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.1</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">18</td>
                        <td class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.2</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">19</td>
                        <td class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.3</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">20</td>
                        <td class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.4</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">21</td>
                        <td class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.5</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">22</td>
                        <td class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.6</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">23</td>
                        <td class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">24</td>
                        <td class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">25</td>
                        <td class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">26</td>
                        <td class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td>1.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">27</td>
                        <td class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td>125.5</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">28</td>
                        <td class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td>312.8</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">29</td>
                        <td class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td>419.3</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">30</td>
                        <td class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td>522.1</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">31</td>
                        <td class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td>420</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">32</td>
                        <td class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td>420.1</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">33</td>
                        <td class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td>413</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">34</td>
                        <td class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">35</td>
                        <td class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">36</td>
                        <td class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">37</td>
                        <td class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">38</td>
                        <td class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">39</td>
                        <td class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">40</td>
                        <td class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">41</td>
                        <td class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">42</td>
                        <td class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">43</td>
                        <td class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td>8.5</td>
                        <td>C/A<sup>1</sup></td>
                    </tr>
                    <tr class="gradeC">
                        <td class="f-s-600 text-inverse">44</td>
                        <td class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td>3.1</td>
                        <td>C</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">45</td>
                        <td class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td>3.3</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">46</td>
                        <td class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td>3.5</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeX">
                        <td class="f-s-600 text-inverse">47</td>
                        <td class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td>-</td>
                        <td>X</td>
                    </tr>
                    <tr class="gradeC">
                        <td class="f-s-600 text-inverse">48</td>
                        <td class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td>1</td>
                        <td>C</td>
                    </tr>
                    <tr class="gradeC">
                        <td class="f-s-600 text-inverse">49</td>
                        <td class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td>1</td>
                        <td>C</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">50</td>
                        <td class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>C</td>
                    </tr>
                    <tr class="gradeA">
                        <td class="f-s-600 text-inverse">51</td>
                        <td class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>A</td>
                    </tr>
                    <tr class="gradeX">
                        <td class="f-s-600 text-inverse">52</td>
                        <td class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>X</td>
                    </tr>
                    <tr class="gradeX">
                        <td class="f-s-600 text-inverse">53</td>
                        <td class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                    </tr>
                    <tr class="gradeX">
                        <td class="f-s-600 text-inverse">54</td>
                        <td class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                    </tr>
                    <tr class="gradeC">
                        <td class="f-s-600 text-inverse">55</td>
                        <td class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td>-</td>
                        <td>C</td>
                    </tr>
                    <tr class="gradeC">
                        <td class="f-s-600 text-inverse">57</td>
                        <td class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td>-</td>
                        <td>C</td>
                    </tr>
                    <tr class="gradeU">
                        <td class="f-s-600 text-inverse">58</td>
                        <td class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                    </tr>
                </tbody>
            </table>
            
            ';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}

    function dmha_5_create($request)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_5::create($request);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }