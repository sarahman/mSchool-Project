<table cellspacing="0" cellpadding="0" width="749px">
    <tbody>
    <tr>
        <th width="38px" class="check"></th>
        <th width="142px" class="photo">Question</th>
        <th width="101px" class="item_name"><a href="#" tiptitle="Sort by name">Answer A</a></th>
        <th width="82px" class="price">
            <a href="#" tiptitle="Sort by name">Answer B</a>
            <a class="tooltip" href="#" tiptitle="Sort by price descending."></a>
        </th>
        <th width="110px" class="status">
            <a href="#" tiptitle="Sort by name">Answer C</a>
            <a href="#" tiptitle="Sort by status"></a>
        </th>
        <th width="93px" class="move">Answer D</th>
        <th width="182px" class="quickaction">Quick Actions</th>
    </tr>

<?php
foreach ($questions as $items) {
    echo <<<EOF
    <tr>
        <td class='check'><input type='checkbox' name='check_selected[]'></td>
        <td>{$items['Question']}</td>
        <td class='item_name'>{$items['AnsA']}</td>
        <td class='price'>{$items['AnsB']}</td>
        <td class='status'>{$items['AnsC']}</td>
        <td class='move'>{$items['AnsD']}</td>
        <td class='quickaction'><ul>
            <li><a class='view' href="javascript:delQues({$items['QuesID']})"><span><span>View</span></span></a></li>
            <li><a class='edit' href="javascript:updateQues({$items['QuesID']})"><span><span>Edit</span></span></a></li>
            <li><a class='delete' href="javascript:delQues({$items['QuesID']})"><span><span>Delete</span></span></a></li>
        </ul></td>
    </tr>
EOF;

}
echo "</tbody>

</table>";