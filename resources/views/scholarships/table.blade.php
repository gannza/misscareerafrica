<div class="table-responsive">
    <table class="table" id="scholarships-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Fname</th>
        <th>Lname</th>
        <th>Email</th>
        <th>Birth Date</th>
        <th>Phone Code</th>
        <th>Phone Number</th>
        <th>Residence</th>
        <th>Gender</th>
        <th>Nationality</th>
        <th>National Id Or Passport Id</th>
        <th>Parents Or Guardian Name</th>
        <th>Parents Guardian Contacts</th>
       
        <th>I Agree</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($scholarships as $scholarship)
            <tr>
            <td>{!! $scholarship->id !!}</td>
            <td>{!! $scholarship->fname !!}</td>
            <td>{!! $scholarship->lname !!}</td>
            <td>{!! $scholarship->email !!}</td>
            <td>{!! $scholarship->birth_date !!}</td>
            <td>{!! $scholarship->phone_code !!}</td>
            <td>{!! $scholarship->phone_number !!}</td>
            <td>{!! $scholarship->residence !!}</td>
            <td>{!! $scholarship->gender !!}</td>
            <td>{!! $scholarship->nationality !!}</td>
            <td>{!! $scholarship->national_ID_or_Passport_ID !!}</td>
            <td>{!! $scholarship->parents_or_guardian_name !!}</td>
            <td>{!! $scholarship->parents_guardian_contacts !!}</td>
            
            <td>{!! $scholarship->i_agree?'<label class="badge badge-success">YES</label>':'<label
                   class="badge badge-danger">NO</label>' !!}</td>
                <td>
                    {!! Form::open(['route' => ['scholarships.destroy', $scholarship->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('scholarships.show', [$scholarship->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('scholarships.edit', [$scholarship->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
