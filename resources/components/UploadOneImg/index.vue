<template>
  <el-upload
    class="avatar-uploader"
    :action="uploadUrl"
    :show-file-list="false"
    :on-success="handleImgSuccess"
    :before-upload="beforeImgUpload">
    <img v-if="imageUrl" :src="imageUrl" class="avatar">
    <i v-else class="el-icon-plus avatar-uploader-icon"></i>
  </el-upload>
</template>

<script>
export default {
  name: 'upload-one-img',
  props: {
    uploadUrl: {
      type: String,
      default: '//res.ccwb.cn/resource/upload/uploadFile.html'
    },
    imgUrl: {
      type: String
    }
  },
  data () {
    return {
      imageUrl: ''
    }
  },
  created () {
    this.imageUrl = this.imgUrl
  },
  methods: {
    handleImgSuccess (res, file) {
      this.imageUrl = URL.createObjectURL(file.raw)
      if (res.success === 'true') {
        this.$emit('on-img', res.data)
      } else {
        this.$message(res.msg)
      }
    },
    beforeImgUpload (file) {
      const isLt2M = file.size / 1024 / 1024 < 2
      if (!isLt2M) {
        this.$message.error('上传图片大小不能超过 2MB!')
      }
      return isLt2M
    }
  },
  watch: {
    imgUrl (newUrl) {
      this.imageUrl = newUrl
    }
  }
}
</script>

<style>
  .avatar-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }

  .avatar-uploader .el-upload:hover {
    border-color: #409EFF;
  }

  .avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
  }

  .avatar {
    width: 100px;
    height: 100px;
    display: block;
  }
</style>
