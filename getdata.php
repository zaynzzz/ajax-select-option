<table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
    <thead class="thead-inverse|thead-default">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Discount</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td><?= $member->member_name; ?></td>
            <td><?= $member->member_email; ?></td>
            <td><?= $member->member_telephone; ?></td>
            <td><?= $member->discount; ?></td>
        </tr>
    </tbody>
</table>