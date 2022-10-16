import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { HomeComponent } from './Routing/home/home.component';
import { ProfileComponent } from './Routing/profile/profile.component';
import { ErrorComponent } from './Routing/error/error.component';
import { UserDetailsComponent } from './Routing/user-details/user-details.component';
import { Lab4Component } from './Routing/lab4/lab4.component';
import { HeaderComponent } from './Routing/header/header.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    ProfileComponent,
    ErrorComponent,
    UserDetailsComponent,
    Lab4Component,
    HeaderComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    ReactiveFormsModule,
    AppRoutingModule,
    NgbModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
