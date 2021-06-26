<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
    <div class="comtainer">
        <h2 style="text-align:center;">Advisor Details</h2>
        <table class="table">
            <thead>

                <tr>
                    <th>


                        @if (isset($user->profile_image))


                            <img class="rounded-circle" src="{{ URL::asset($user->profile_image) }}" width="100"
                                height="100" alt="person" style=" border-radius: 50%;">
                        @endif

                    </th>



                </tr>
            </thead>
                        <tbody>


                            <tr>

                                <th>
                                    <h4 style="color:red;"> Personal Information </h4>
                                </th>
                            </tr>

                            <tr>
                                <th>Name</th>
                                <th>Father's Name</th>
                                <th>Mother's Name</th>
                            </tr>



                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->agent_father }}</td>
                                <td>{{ $user->agent_mother }}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                            </tr>

                            <tr>


                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->agent_dob }}</td>


                            </tr>

                            <tr>

                                <th>Present Address</th>
                                <th>Permanent Address</th>
                                <th> NID Number</th>
                                <th></th>
                            </tr>

                            <tr>
                                <td>{{ $user->agent_present_address }}</td>
                                <td> {{ $user->agent_permanent_address }}</td>
                                <td>{{ $user->agent_nid }}</td>
                                <td></td>
                            </tr>

                            <tr>

                                <th>
                                    <h4 style="color:red;">Education </h4>
                                </th>
                            </tr>
                            <tr>

                                <th>Degree</th>
                                <th>Institute</th>
                                <th>Result</th>


                            </tr>



                            @php
                                $educations = App\Education::where('user_id', $user->id)->get();

                            @endphp

                            @foreach ($educations as $education)



                                @if (!empty($education->institue) && !empty($education->agent_result) && !empty($education->agent_degree))
                                    <tr>
                                        <td> {{ $education->agent_degree }}</td>

                                        <td>{{ $education->institue }}</td>

                                        <td>{{ $education->agent_result }}</td>

                                    </tr>
                                @endif


                            @endforeach





                            <tr>

                                <th>
                                    <h4 style="color:red;">Work Experiences </h4>
                                </th>
                            </tr>




                            <tr>
                         <th>Comapny</th>
                          <th> Position</th>
                         <th> Department</th>

                            </tr>

                                    @php
                                        $companys = App\Company::where('user_id', $user->id)->get();

                                    @endphp
                                    @foreach ($companys as $company)
                                        @if (!empty($company->company) && !empty($company->position) && !empty($company->department))
                                           <tr>
                                           <td>{{ $company->company }}
                                        </td>


                                          <td>{{ $company->position }}</td>




                                          <td>{{ $company->department }}</td>
                                           </tr>





                                        @endif


                                    @endforeach









                            <tr>
                                <th>
                                    Years Of Experience : {{ $user->yrs_exp }}
                                </th>
                            </tr>



                            @if (isset($user->skill))

                                <tr>
                                    <th>
                                        <b>Skill:</b> {{ $user->skill }}<br>

                                    </th>
                                </tr>



                            @endif
                        </tbody>
                    </table>

        <p class="text-muted" style="text-align: center;">I have read and accepted all the tearms and conditions</p>
        <br><br>
        <p style="text-decoration: overline black;">Advisor/Seller Signature</p><br>

    </div>






</body>

</html>
