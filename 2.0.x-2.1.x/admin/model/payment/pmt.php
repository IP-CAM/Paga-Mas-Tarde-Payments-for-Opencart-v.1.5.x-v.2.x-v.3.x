<?php

class ModelPaymentPmt extends Model
{
    public function getMethod($address)
    {
        $this->load->language('payment/pmt');

        if ($this->config->get('pmt_status')) {
            $status = true;
        } else {
            $status = false;
        }

        $method_data = array();

        //original message
        $financia = $this->language->get('text_title');

        if ($status) {
            $method_data = array(
                'code' => 'pmt',
                'title' => $financia,
            'terms' => '',
                'sort_order' => $this->config->get('pmt_sort_order'),
              );
        }

        return $method_data;
    }
}
