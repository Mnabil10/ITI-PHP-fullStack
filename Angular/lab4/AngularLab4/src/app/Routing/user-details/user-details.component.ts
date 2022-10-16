import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-user-details',
  templateUrl: './user-details.component.html',
  styles: [
  ]
})
export class UserDetailsComponent implements OnInit {

  userID = 0;

  constructor(myActivated:ActivatedRoute) {
    // console.log(myActivated.snapshot.params['id']);
    this.userID = myActivated.snapshot.params['id'];
  }

  ngOnInit(): void {
  }

}
