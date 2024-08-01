@include('employeePanel.dashboard.header')

<style>
.custom-certificate-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    padding: 20px;
    background-color: #f4f4f4; /* Optional: Use your background color */
}

.custom-certificate {
    background: white;
    padding: 40px;
    width: 90%;
    height: 90%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 2px;
    text-align: center;
    position: relative;
    border: 4px solid #9f8d2c;
}

.custom-header h1 {
    margin: 0;
    font-size: 48px;
    color: #7a5e1a;
}

.custom-header h2 {
    margin: 0;
    font-size: 24px;
    color: #7a5e1a;
}

.custom-awarded {
    margin-top: 30px;
    font-size: 18px;
    color: #555;
}

.custom-name {
    font-size: 32px;
    margin: 10px 0;
    color: #333;
}

.custom-description {
    font-size: 16px;
    color: #777;
    margin: 20px 0;
}

.custom-date {
    font-size: 14px;
    color: #777;
    margin: 10px 0 40px;
}

.custom-signatures {
    display: flex;
    justify-content: space-between;
    padding: 0 40px;
    margin-top: 30px;
}

.custom-signature p {
    margin: 5px 0;
    color: #333;
}

.custom-footer {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
}

.custom-footer img {
    width: 80px;
}   
.print-button {
            display: flex;
            justify-content: center;
            margin: 20px;
        }
        .print-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .print-button button:hover {
            background-color: #45a049;
        }


</style>
<main
:class="[$store.app.sidebar && $store.app.menu=='vertical'?'w-full xl:ltr:ml-[280px] xl:rtl:mr-[280px] xl:w-[calc(100%-280px)]':'w-full',$store.app.sidebar && $store.app.menu=='hovered'?'w-full xl:ltr:ml-[80px] xl:w-[calc(100%-80px)] xl:rtl:mr-[80px]':'w-full', $store.app.menu == 'horizontal' && 'xl:!pt-[118px]', $store.app.contrast=='high'?'bg-neutral-0 dark:bg-neutral-904':'bg-neutral-20 dark:bg-neutral-903']"
class="w-full text-neutral-700 min-h-screen dark:text-neutral-20 pt-[60px] md:pt-[66px] duration-300">
<div
  :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']"
  class="p-3 md:p-4 xxl:p-6">
 
<div class="custom-certificate-container" id="print-certificate">
    <div class="custom-certificate">
        <div class="custom-header">
            <h1>CERTIFICATE</h1>
            <h2>OF RECOGNITION</h2>
            <p class="" style="color:rgb(122 94 26); margin-top:10px;"> Policy Name: {{$policy}}</p>
        </div>
        <p class="custom-awarded " style="color:#94742c;">THE CERTIFICATE IS AWARDED TO </p>
        <h3 class="custom-name">{{$employee->employee_name}}</h3> <hr style="border:2px solid #94742c; width:70%; margin:auto;">
        <p class="custom-description" style="color: #777; line-height:27px;">This certificate is awarded to {{$employee->employee_name}} for outstanding compliance with the Workplace Safety Policy, demonstrating exceptional adherence to safety protocols and contributing to a safe working environment.
        </p>
        <p class="custom-date" style="color:#777;">This certificate was awarded on 
            {{date_format($employee->created_at,'d M Y')}}. </p>
        <div class="custom-signatures">
            <div class="custom-signature">
                <p>Hugo Hill</p>
                <p>General Manager of Ultimate Co.</p>
            </div>
            <div class="custom-signature">
                <p>Jack Cotton</p>
                <p>CEO of Ultimate Co.</p>
            </div>
        </div>
        <div class="custom-footer">
            <img src="{{url('/assets/images/seal1.png')}}" alt="Seal">
        </div>
    </div>
</div>

<div class="print-button">
    <button type="button" onclick="Print()"  id="cmd" >Download Certificate</button>
</div>

</main>
@include('employeePanel.dashboard.footer')
<script>
    function Print()
    {
        window.print();
    }
</script>
