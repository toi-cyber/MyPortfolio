<template>

  <q-card flat class="q-pa-md form-card">
    <q-form @submit.prevent="onSubmit" @reset="onReset" ref="formRef">
      <q-card-section>
        <div style="margin-bottom: 16px;" class="text-h6">お問い合わせフォーム</div>
        <p>公式LINEでのお問い合わせがおすすめです。<br>
          <q-btn dense class="q-btn-with-icon" type="a" href="https://lin.ee/tebEM0u" target="_blank" flat no-caps>
            <img src="../assets/LINE_Brand_icon.png" style="width: 1.7em; margin-right: 8px;" alt="">
            <span>公式LINE</span>
          </q-btn>
        </p>
        <p>以下のフォームからもお問い合わせができます。 どんな内容でも大歓迎ですのでどうぞ気軽にご連絡ください。</p>

        <label class="contact-form-input">
          <p>お名前 <span>必須</span></p>
          <q-input dense filled v-model="form.name" required class="q-mb-md" />
        </label>

        <label class="contact-form-input">
          <p>メールアドレス <span>必須</span></p>
          <q-input dense filled v-model="form.email" type="email" required class="q-mb-md" />
        </label>

        <label class="contact-form-input">
          <p>メッセージ <span>必須</span></p>
          <q-input dense filled v-model="form.message" type="textarea" autogrow required />
        </label>

      </q-card-section>
      <q-card-actions align="center" style="padding:15px;">
        <q-btn class="wide-btn" label="送信" color="primary" type="submit" />
      </q-card-actions>
    </q-form>
  </q-card>

</template>

<script>
export default {
  data() {
    return {
      form: {
        name: '',
        email: '',
        message: ''
      }
    };
  },
  methods: {
    onSubmit() {
      // 送信処理 (例: APIコール)
      if (this.$refs.formRef.validate()) {
        console.log("送信されました:", this.form);
        // ここに送信ロジックを追加
        alert("お問い合わせを送信しました！");
        this.onReset(); // フォームをリセット
      }
    },
  }
};
</script>
