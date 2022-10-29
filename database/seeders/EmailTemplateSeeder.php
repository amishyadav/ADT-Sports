<?php

namespace Database\Seeders;

use App\Models\EmailTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputs = [
            [
                'name'    => 'Password Reset',
                'subject' => 'Password Reset',
                'message' => '<p>We have received a request to reset the password for your account on&nbsp;<strong>{{time}} .</strong></p><p>Requested From IP:&nbsp;<strong>{{ip}}</strong>&nbsp;using&nbsp;<strong>{{browser}}</strong>&nbsp;on&nbsp;<strong>{{operating_system}}&nbsp;</strong>.</p><p><br></p><p><br></p><p>Your account recovery code is:&nbsp;&nbsp;&nbsp;<strong>{{code}}</strong></p><p><br></p><p><br></p><h2><span style="color: rgb(230, 0, 0);">If you do not wish to reset your password, please disregard this message.&nbsp;</span></h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Password Reset Confirmation',
                'subject' => 'You have Reset your password',
                'message' => '<p>You have successfully reset your password.</p><p>You changed from&nbsp;IP:&nbsp;<strong>{{ip}}</strong>&nbsp;using&nbsp;<strong>{{browser}}</strong>&nbsp;on&nbsp;<strong>{{operating_system}}&nbsp;</strong>&nbsp;on&nbsp;<strong>{{time}}</strong></p><p><br></p><h2><strong style="color: rgb(230, 0, 0);">If you did not changed that, Please contact with us as soon as possible.</strong></h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Email Verification',
                'subject' => 'Please verify your email address',
                'message' => '<p><br></p><p>Thanks For join with us.</p><p>Please use below code to verify your email address.</p><p><br></p><h2>Your email verification code is:<strong>&nbsp;{{code}}</strong></h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'SMS Verification',
                'subject' => 'Please verify your phone',
                'message' => '<h2>Your phone verification code is: {{code}}</h2>',
                'status'  => 0,
            ],
            [
                'name'    => 'Google Two Factor - Enable',
                'subject' => 'Google Two Factor Authentication is now Enabled for Your Account',
                'message' => '<p>You just enabled Google Two Factor Authentication for Your Account.</p><p><br></p><h2>Enabled at&nbsp;<strong>{{time}}&nbsp;</strong>From IP:&nbsp;<strong>{{ip}}</strong>&nbsp;using&nbsp;<strong>{{browser}}</strong>&nbsp;on&nbsp;<strong>{{operating_system}}&nbsp;</strong>.</h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Google Two Factor Disable',
                'subject' => 'Google Two Factor Authentication is now Disabled for Your Account',
                'message' => '<p>You just Disabled Google Two Factor Authentication for Your Account.</p><p><br></p><h2>Disabled at&nbsp;<strong>{{time}}&nbsp;</strong>From IP:&nbsp;<strong>{{ip}}</strong>&nbsp;using&nbsp;<strong>{{browser}}</strong>&nbsp;on&nbsp;<strong>{{operating_system}}&nbsp;</strong>.</h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Support Ticket Reply',
                'subject' => 'Reply Support Ticket',
                'message' => '<p><strong>A member from our support team has replied to the following ticket:</strong></p><p><br></p><p><strong>[Ticket#{{ticket_id}}] {{ticket_subject}}</strong></p><p><br></p><p><strong>Click here to reply:&nbsp;{{link}}</strong></p><p>----------------------------------------------</p><p>Here is the reply :</p><h2>{{reply}}</h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Automated Deposit - Successful',
                'subject' => 'Deposit Completed Successfully',
                'message' => '<p>Your deposit of&nbsp;<strong>{{amount}} {{currency}}</strong>&nbsp;is via&nbsp;&nbsp;<strong>{{method_name}}&nbsp;</strong>has been completed Successfully.</p><p><br></p><p><strong>Details of your Deposit :</strong></p><p><br></p><p><strong>Amount : {{amount}} {{currency}}</strong></p><p><strong>Charge:&nbsp;{{charge}} {{currency}}</strong></p><p><br></p><p><strong>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</strong></p><p><strong>Payable : {{method_amount}} {{method_currency}}</strong></p><p><strong>Paid via :&nbsp;{{method_name}}</strong></p><p><br></p><p><strong>Transaction Number : {{trx}}</strong></p><p><br></p><h2>Your current Balance is&nbsp;<strong>{{post_balance}} {{currency}}</strong></h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Manual Deposit - User Requested',
                'subject' => 'Deposit Request Submitted Successfully',
                'message' => '<p>Your deposit request of&nbsp;<strong>{{amount}} {{currency}}</strong>&nbsp;is via&nbsp;&nbsp;<strong>{{method_name}}&nbsp;</strong>submitted successfully<strong>&nbsp;.</strong></p><p><br></p><p><strong>Details of your Deposit :</strong></p><p><br></p><p>Amount : {{amount}} {{currency}}</p><p>Charge:&nbsp;{{charge}} {{currency}}</p><p><br></p><p>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</p><p>Payable : {{method_amount}} {{method_currency}}</p><p>Pay via :&nbsp;{{method_name}}</p><p><br></p><h2>Transaction Number : {{trx}}</h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Manual Deposit - Admin Approved',
                'subject' => 'Your Deposit is Approved',
                'message' => '<p>Your deposit request of&nbsp;<strong>{{amount}} {{currency}}</strong>&nbsp;is via&nbsp;&nbsp;<strong>{{method_name}}&nbsp;</strong>is Approved .</p><p><br></p><p><strong>Details of your Deposit :</strong></p><p><br></p><p>Amount : {{amount}} {{currency}}</p><p>Charge:&nbsp;{{charge}} {{currency}}</p><p><br></p><p>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</p><p>Payable : {{method_amount}} {{method_currency}}</p><p>Paid via :&nbsp;{{method_name}}</p><p><br></p><p>Transaction Number : {{trx}}</p><p><br></p><h2>Your current Balance is&nbsp;<strong>{{post_balance}} {{currency}}</strong></h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Manual Deposit - Admin Rejected',
                'subject' => 'Your Deposit Request is Rejected',
                'message' => '<p>Your deposit request of&nbsp;<strong>{{amount}} {{currency}}</strong>&nbsp;is via&nbsp;&nbsp;<strong>{{method_name}} has been rejected</strong>.</p><p><br></p><p>Transaction Number was : {{trx}}</p><p><br></p><p>if you have any query, feel free to contact us.</p><p><br></p><p><br></p><p><br></p><h2>{{rejection_message}}</h2>',
                'status'  => 1,
            ],
            [
                'name'    => 'Withdraw  - User Requested',
                'subject' => 'Withdraw Request Submitted Successfully',
                'message' => '<p>Your withdraw request of&nbsp;<strong>{{amount}} {{currency}}</strong>&nbsp;via&nbsp;&nbsp;<strong>{{method_name}}&nbsp;</strong>has been submitted Successfully.</p><p><br></p><p><strong>Details of your withdraw:</strong></p><p><br></p><p>Amount : {{amount}} {{currency}}</p><p>Charge:&nbsp;{{charge}} {{currency}}</p><p><br></p><p>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</p><p>You will get: {{method_amount}} {{method_currency}}</p><p>Via :&nbsp;{{method_name}}</p><p><br></p><p>Transaction Number : {{trx}}</p><p><br></p><p><strong>This may take {{delay}} to process the payment.</strong></p><p><br></p><p><br></p><p>Your current Balance is&nbsp;<strong>{{post_balance}} {{currency}}</strong></p>',
                'status'  => 1,
            ],
            [
                'name'    => 'Withdraw - Admin Rejected',
                'subject' => 'Withdraw Request has been Rejected and your money is refunded to your account',
                'message' => '<p>Your withdraw request of&nbsp;<strong>{{amount}} {{currency}}</strong>&nbsp;via&nbsp;&nbsp;<strong>{{method_name}}&nbsp;</strong>has been Rejected.</p><p><br></p><p><strong>Details of your withdraw:</strong></p><p><br></p><p>Amount : {{amount}} {{currency}}</p><p>Charge:&nbsp;{{charge}} {{currency}}</p><p><br></p><p>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</p><p>You should get: {{method_amount}} {{method_currency}}</p><p>Via :&nbsp;{{method_name}}</p><p><br></p><p>Transaction Number : {{trx}}</p><p><br></p><p><br></p><p>----</p><p><br></p><p>{{amount}} {{currency}} has been&nbsp;<strong>refunded&nbsp;</strong>to your account and your current Balance is&nbsp;<strong>{{post_balance}}&nbsp;{{currency}}</strong></p><p><br></p><p>-----</p><p><br></p><p>Details of Rejection :</p><p><strong>{{admin_details}}</strong></p>',
                'status'  => 1,
            ],
            [
                'name'    => 'Withdraw - Admin  Approved',
                'subject' => 'Withdraw Request has been Processed and your money is sent',
                'message' => '<p>Your withdraw request of&nbsp;<strong>{{amount}} {{currency}}</strong>&nbsp;via&nbsp;&nbsp;<strong>{{method_name}}&nbsp;</strong>has been Processed Successfully.</p><p><br></p><p><strong>Details of your withdraw:</strong></p><p><br></p><p>Amount : {{amount}} {{currency}}</p><p>Charge:&nbsp;{{charge}} {{currency}}</p><p><br></p><p>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</p><p>You will get: {{method_amount}} {{method_currency}}</p><p>Via :&nbsp;{{method_name}}</p><p><br></p><p>Transaction Number : {{trx}}</p><p><br></p><p>-----</p><p><br></p><p>Details of Processed Payment :</p><p><strong>{{admin_details}}</strong></p>',
                'status'  => 1,
            ],
            [
                'name'    => 'Balance Add by Admin',
                'subject' => 'Your Account has been Credited',
                'message' => '<p>{{amount}} {{currency}} has been added to your account .</p><p><br></p><p>Transaction Number : {{trx}}</p><p><br></p><p>Your Current Balance is :&nbsp;<strong>{{post_balance}}&nbsp;{{currency}}&nbsp;</strong></p>',
                'status'  => 1,
            ], 
            [
                'name'    => 'Balance Subtracted by Admin',
                'subject' => 'Your Account has been Debited',
                'message' => '<p>{{amount}} {{currency}} has been subtracted from your account .</p><p><br></p><p>Transaction Number : {{trx}}</p><p><br></p><p>Your Current Balance is :&nbsp;<strong>{{post_balance}}&nbsp;{{currency}}</strong></p>',
                'status'  => 1,
            ],
            [
                'name'    => 'Bet Placed Successfully',
                'subject' => 'Your Bet Is Placed Successfully',
                'message' => '<p><strong>{{invest_amount}}</strong>&nbsp;{{currency}} has been subtracted from your account&nbsp;for placing bet for&nbsp;<strong>{{option}}</strong>.</p><p><br></p><p>Transaction Number : {{trx}}</p><p><br></p><p><strong>Betting Details :&nbsp;</strong></p><p><br></p><p>Match :&nbsp;<strong>{{match}}</strong></p><p>Question :&nbsp;<strong>{{question}}</strong></p><p>Bet For :&nbsp;<strong>{{option}}</strong></p><p>Invest :&nbsp;<strong>{{invest_amount}} {{currency}}</strong></p><p>Return :&nbsp;<strong>{{return_amount}} {{currency}}&nbsp;</strong>[If you win]</p><p><br></p><p>Your Current Balance is :&nbsp;<strong>{{post_balance}}&nbsp;{{currency}}</strong></p>',
                'status'  => 1,
            ],
            [
                'name'    => 'Referral Commission',
                'subject' => 'You got referral commission',
                'message' => '<p><strong>Congratulations,&nbsp;</strong>you got {{amount}} {{currency}} as referral commission.</p><p><br></p><p><strong>Details :&nbsp;</strong></p><p><br></p><p><strong>Transaction Number :&nbsp;{{trx}}</strong></p><p><strong>{{level}}</strong></p><p><br></p><p>Your Current Balance is :&nbsp;<strong>{{post_balance}}&nbsp;{{currency}}</strong></p>',
                'status'  => 1,
            ],
        ];

        foreach ($inputs as $input) {
            EmailTemplate::create($input);
        }
    }
}
