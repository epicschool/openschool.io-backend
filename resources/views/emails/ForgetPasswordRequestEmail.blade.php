<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Set up a new password for [product] account</title>
    @include('emails.Style')
  </head>
  <body>
    <span class="preheader">Use this link to reset your password. The link is only valid for 3 hours.</span>
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center">
          <table class="email-content" width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td class="email-masthead">
                <a href="{{ env('APP_FRONT_END_BASE_URL')  }}" class="email-masthead_name">
        
      </a>
              </td>
            </tr>
            <!-- Email Body -->
            <tr>
              <td class="email-body" width="100%" cellpadding="0" cellspacing="0">
                <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
                  <!-- Body content -->
                  <tr>
                    <td class="content-cell">
                      <h1>Hi {{$first_name}},</h1>
                      <p>You recently requested to reset your password for your [product] account. Use the button below to reset it. <strong>This password reset is only valid for the next 3 hours.</strong></p>
                      <!-- Action -->
                      <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="center">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td>
                                        <a href="{{ env('APP_FRONT_END_BASE_URL') . '#/resetPassword?token=' . $reset_token}}" class="button button--green" target="_blank">Reset your password</a>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <p>If you did not request a password reset, please ignore this email or <a href="{{ env('APP_FRONT_END_BASE_URL') . '#/contact'}}">contact support</a> if you have questions.</p>
                      <p>Thanks,
                        <br>The [product] Team</p>
                      <!-- Sub copy -->
                      <table class="body-sub">
                        <tr>
                          <td>
                            <p class="sub">If you’re having trouble with the button above, copy and paste the URL below into your web browser.</p>
                            <p class="sub">{{ env('APP_FRONT_END_BASE_URL') . '#/resetPassword?token=' . $reset_token}}</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="content-cell" align="center">
                      <p class="sub align-center">&copy; 2018 [product]. All rights reserved.</p>
                      <p class="sub align-center">
                           [product], LLC
                        <br>1234 Street Rd.
                        <br>Suite 1234
                      </p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>