<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

class SchoolSupervisorEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $report;
    public function __construct($report)
    {
        //
        $this->report = $report;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('view.name');

        return $this->from('lewismunyi97@gmail.com')
            ->view('mail.studentreport')
//            ->text('mail.reportplain')
            ->with(
                [
                    'testVarOne' => '1',
                    'testVarTwo' => '2',
                ]);
//            ->attach(public_path('/images').'/report.jpg', [
//                'as' => 'report.jpg',
//                'mime' => 'image/jpeg',
//            ]);
    }

    public function convert()
    {
        $converter = new CssToInlineStyles();
        $converter->setUseInlineStylesBlock();
        $converter->setCleanup();
        $converter->setStripOriginalStyleTags();
        $converter->setHTML($this->view);
        $content =  $converter->convert();

        return $content;
    }
}
