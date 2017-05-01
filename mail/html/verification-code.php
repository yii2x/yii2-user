<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */


use yii\helpers\Html;
?>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td class="free-text">
                <b><?= Yii::$app->name; ?> Verification Code Request</b>
            </td>
          </tr>
          <tr>
            <td class="mini-block-container">
              <table cellspacing="0" cellpadding="0" width="100%"  style="border-collapse:separate !important;">
                <tr>
                  <td class="mini-block">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td>
                          <table cellspacing="0" cellpadding="0" width="100%">

                            <tr>
                              <td class="user-msg">
                                    <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
                                        <?= Yii::t('app', 'Hello') ?>,
                                    </p>

                                    <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
                                        <?= Yii::t('app', 'We have received a request to reset the password for your account on {0}', Yii::$app->name) ?>.
                                    </p>
                                    <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
                                        <?= Yii::t('app', 'Here is your Verification Code: <b>{0}</b>',$verification_code) ?>
                                    </p>                                
                                    
                                    <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
                                        <?= Yii::t('app', 'If you did not make this request you can ignore this email') ?>.
                                    </p>
                              </td>
                            </tr>
                          </table>
                        </td>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>