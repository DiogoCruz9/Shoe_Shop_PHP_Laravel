@extends('layouts.master')

@section('title','Contact')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact StandUP</h1>
            <hr>
            <form action="{{route('contact')}}" method ="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Send Message">
            </form>
        </div>
    </div>

    <br>
    <br>
    <div class="wrapper">
        <div class="content">
            <div id="footer" class="cf">
                <div class="column three">
                    <strong><i class="fas fa-phone"></i> Contact:</strong> 229515264 / 935672519
                    <hr>
                </div><!--column-->

                <div class="column three">

                    <strong><i class="fas fa-home"></i> Address:</strong> R. de António Cardoso 222 , 4150-079 Porto


                </div><!--column-->

                <div class="column three last">
                    <br>
                    <strong><i class="fas fa-clock"></i> Hours:</strong>
                    <br>
                    <em>Monday:</em> 9 AM - 8 PM<br>
                    <em>Tuesday:</em> 10 AM - 8 PM<br>
                    <em>Wednesday:</em> 9 AM - 8 PM<br>
                    <em>Thursday:</em> 10 AM - 8 PM<br>
                    <em>Friday:</em> 10 AM - 8 PM<br>
                    <em>Saturday-Sunday:</em> Closed<br>
                    <hr>
                </div><!--column-->
            </div><!--footer -->
            <small>&copy;2019 Diogo Cruz & Pedro Ramalho</small>
        </div><!--content-->
    </div><!--wrapper-->
    <div class="copyright-info">
    </div><!--copyright-info-->

@endsection
