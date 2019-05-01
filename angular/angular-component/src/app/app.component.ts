// Author: Sandy Gould (sjg5rv) and Ruolin Chen (rlc8my)

import { Component } from '@angular/core';
import { Order } from './order';

import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'User Registration';

  // let's create a property to store a response from the back end
  // and try binding it back to the view
  responsedata = null;

  groups = ['BTS', 'SNSD', 'CSAPink', 'Twice', 'BlackPink', 'NCT', 'EXO', 'Stray Kids', 'Super Junior', 'LOONA', 'Red Velvet', 'Other'];
  orderModel = new Order('username', '', '', 12, '', '', '');

  constructor(private http: HttpClient) { }

  senddata(data) {
     console.log(data);

     let params = JSON.stringify(data);

     //this.http.get('http://localhost/cs4640s19/ngphp-get.php?str='+encodeURIComponent(params))
     //this.http.get('http://localhost/cs4640s19/ngphp-get.php?str='+params)
     this.http.post('http://localhost/WebPL/post.php', params)
     .subscribe((params) => {
        console.log('Got data from backend', params);
        this.responsedata = params;
     }, (error) => {
        console.log('Error', error);
     })
  }

}
